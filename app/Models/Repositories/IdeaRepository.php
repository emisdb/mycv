<?php

namespace App\Models\Repositories;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaRepository extends  DictRepository
{
    const DICT_ID = "idea";
    const DICT_LABEL_LIST = "Ideas";
    const DICT_LABEL_FORM = "Idea";

    protected $model;
    public function getId() : array
    {
        return [self::DICT_ID, self::DICT_LABEL_LIST, self::DICT_LABEL_FORM];
    }

    public function getData($id = 0) : array
    {
        $this->model = new Idea();
        if($id) {
            return $this->model->find($id)->toArray();
        } else {
            return $this->model->all()->toArray();
        }
    }
    public function setData(Request $request, $id = 0) : bool
    {
        $request->validate($this->getValidation());
        $this->model = new Idea();
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
                'validation' =>  ['required','string','max:64'],
                'length' => 3
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'validation' => ['required','string','max:256'],
                'length' => 6
            ],
        ];
    }


}
