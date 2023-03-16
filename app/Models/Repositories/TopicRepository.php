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
    public function getId() : array
    {
        return [self::DICT_ID, self::DICT_LABEL_LIST, self::DICT_LABEL_FORM];
    }

    public function getSubList($id): array
    {
        return ['dataset' => $this->getSubData($id), 'params' => $this->columns(), 'title' => $this->getId()];
    }

    protected function setLink(array $arr): array
    {
        $arr['name'] = '<a href="'.route('dict.six',[self::DICT_ID,$arr['id']]).'">' . $arr['name'] . "</a>";
        if(isset($arr['topic'])) {
            $arr['parent'] = '<a href="'.route('dict.six',[self::DICT_ID,$arr['id']]).'">' . $arr['topic']['name'] . "</a>";
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
            return $this->setLink($this->model->find($id)->toArray());
        } else {
            return $this->setLinks($this->model->whereNull('parent')->get()->toArray());
        }
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
        $this->model = Topic::query()
            ->with(['topic' => function ($query) {
                $query->select('id', 'name');
            }]);

        dd($this->model->find(4)->toArray());
    }


}
