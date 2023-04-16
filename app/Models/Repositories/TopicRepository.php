<?php

namespace App\Models\Repositories;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicRepository extends  MultiLevelDictRepository
{
    const DICT_ID = "topic";
    const DICT_LABEL_LIST = "Topics";
    const DICT_LABEL_FORM = "Topic";
    const DICT_SUBDICT = "idea";
    const DICT_PARENT_ID = "topic_id";

    protected $model;
    protected $path;
    public function getSubForm($id) : array
    {
        return ['dataset' => ['topic_id'=>$id], 'params' => $this->columns(), 'title' => $this->getId()];
    }

    public function getSubList($id): array
    {
        return ['dataset' => $this->getSubData($id), 'params' => $this->columns(), 'title' => $this->getId()];
    }

    protected function makePath(Topic $topic)
    {
        $topic_p = $topic->topic;
        if($topic_p){
            array_unshift($this->path, $this->makeLink($topic_p->id,$topic_p->name));
            $this->makePath($topic_p);
       }
   }
    protected function setLink(array $arr): array
    {
        $arr['name'] = $this->makeLink($arr['id'],$arr['name']);
        $arr['subdict'] = $this->makeLink($arr['id'],"",static::DICT_SUBDICT);
        if(isset($arr['topic'])) {
            $arr['parent'] = $this->makeLink($arr['id'],$arr['topic']['name']);
        }
        return $arr;
    }
    protected function setLinks(array $arrs): array
    {
        $res = [];
        foreach ($arrs as $arr){
            $res[] = $this->setLink($arr);
         }
         return $res;
    }
    public function getPath($id) : array
    {
        $this->path = [];
        if($topic=Topic::find($id)) {
            $this->path = [$topic->name];
            $this->makePath($topic);
        }
        return $this->path;
     }

     public static function getSubIds($id,$arr = [])
     {
         $arrl = Topic::query()->select('id')->where('topic_id', '=', $id)->get()->toArray();

         if(!empty($arrl)){
             foreach($arrl as $tpic){
                 array_push($arr, $tpic['id']);
                 $arr = self::getSubIds($tpic['id'],$arr);
             }
         }
         return $arr;
     }

        public function getSubData($id) : array
    {
        $this->model = Topic::query()
            ->with(['topic' => function ($query) {
                $query->select('id', 'name');
            }]);

           return $this->setLinks($this->model->where('topic_id', '=', $id)->get()->toArray());
     }

    public function getData($id = 0) : array
    {
        $this->model = Topic::query()
            ->with(['topic' => function ($query) {
                $query->select('id', 'name');
            }]);

        if($id) {
            return $this->getFormData($id);
        } else {
            return $this->getDataForUpperLevel();
        }
    }
    protected function getFormData($id): array
    {
        $arr = $this->model->find($id)->toArray();
        if(isset($arr['topic'])) {
            $arr['parent'] = $arr['topic']['id'];
        }
        return $arr;

    }
    protected function getDataForUpperLevel(): array
    {
        return $this->setLinks($this->model->whereNull('topic_id')->get()->toArray());
   }

    public function setData(Request $request, $id = 0) : bool
    {
        $data = $request->validate($this->getValidation());
        if($data['topic_id'] == 0) $data['topic_id'] = null;
        $this->model = new Topic();
        if($id) {
            return $this->model->find($id)->update($data);
       } else {
            return is_object($this->model->create($data));
        }
    }

    public function delete($id) : array
    {
        $this->model = new Topic();
        $rec = $this->model->find($id);
        $result['parent'] = $rec->topic_id;
        $result['success'] = $rec->delete();
        return $result;
    }
    public function columns() : array
    {
        /*
         * parameter length must sum up 9 in the end
         */
        return [
            [
                'name' => 'name',
                'label' => 'Name',
                'validation' =>  ['required','string','max:32'],
                'length' => 3,
                'type' => 'text'
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'validation' => ['required','string','max:128'],
                'length' => 6,
                'type' => 'text'
            ],
            [
                'name' => 'topic_id',
                'parent' => true,
                'label' => 'Parent',
                'validation' => [],
                'length' => 0,
                'type' => 'hidden'
            ],
        ];
    }
    public function test() {
        $this->path = [];
        $this->makePath(Topic::find(5));
        dd($this->path);
    }


}
