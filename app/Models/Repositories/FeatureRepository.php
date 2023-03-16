<?php

namespace App\Models\Repositories;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureRepository extends  DictRepository
{
    const DICT_ID = "feat";
    const DICT_LABEL_LIST = "Features";
    const DICT_LABEL_FORM = "Feature";

    protected $model;
    public function getId() : array
    {
        return [self::DICT_ID, self::DICT_LABEL_LIST, self::DICT_LABEL_FORM];
    }

    public function getData($id = 0) : array
    {
        $this->model = new Feature();
        if($id) {
            return $this->model->find($id)->toArray();
        } else {
            return $this->model->all()->toArray();
        }
    }
    public function setData(Request $request, $id = 0) : bool
    {
        $request->validate($this->getValidation());
        $this->model = new Feature();
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
                'label' => 'Feature',
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


}
