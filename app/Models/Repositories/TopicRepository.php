<?php

namespace App\Models\Repositories;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicRepository extends  MultiLevelDictRepository
{
    const DICT_ID = "topic";
    const DICT_LABEL_LIST = "Topics";
    const DICT_LABEL_FORM = "Topic";

    protected $model;
    protected $path;

    public function getId() : array
    {
        return [self::DICT_ID, self::DICT_LABEL_LIST, self::DICT_LABEL_FORM];
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

    protected function makeLink(int $id, string $name): array
    {
        return [
                'type'      => 'link',
                'route'     => 'dict.six',
                'params'    => [self::DICT_ID,$id],
                'name'      => $name
                ];
   }
    protected function setLink(array $arr): array
    {
        $arr['name'] = $this->makeLink($arr['id'],$arr['name']);
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

        public function getSubData($id) : array
    {
        $this->model = Topic::query()
            ->with(['topic' => function ($query) {
                $query->select('id', 'name');
            }]);

           return $this->setLinks($this->model->where('parent', '=', $id)->get()->toArray());
     }

    public function getData($id = 0) : array
    {
        $this->model = Topic::query()
            ->with(['topic' => function ($query) {
                $query->select('id', 'name');
            }]);

        if($id) {
            return $this->model->find($id)->toArray();
        } else {
            return $this->getDataForUpperLevel();
        }
    }
    protected function getDataForUpperLevel(): array
    {
        return $this->setLinks($this->model->whereNull('parent')->get()->toArray());
   }

    public function setData(Request $request, $id = 0) : bool
    {
        $request->validate($this->getValidation());
        $this->model = new Topic();
        if($id) {
            return $this->model->find($id)->update($request->all());
       } else {
            return is_object($this->model->create($request->all()));
        }
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
                'length' => 3
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'validation' => ['required','string','max:128'],
                'length' => 6
            ],
        ];
    }
    public function test() {
        $this->path = [];
        $this->makePath(Topic::find(5));
        dd($this->path);
    }


}
