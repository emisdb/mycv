<?php

namespace App\Models\Repositories;

use App\Models\Feature;

class FeatureRepository implements RepositoryInterface
{
    const DICT_ID = "feat";
    const DICT_LABEL = "Feature";

    protected $model;
    public function getId() : array
    {
        return [self::DICT_ID, self::DICT_LABEL];
    }
    public function getData($id = 0) : array
    {
        $this->model = new Feature();
        if($id) {
            return $this->model->find($id)->toArry();
        } else {
            return $this->model->all()->toArray();
        }
    }
    private function labels()
    {
        return [
            'name' => 'Name',
            'description' => 'Description'
        ];
    }
    private function validations()
    {
        return [
            'name' => ['required','string','max:32'],
            'description' => ['required','string','max:128'],
        ];
    }

    private function fields()
    {
        return [
            'name',
            'description'
        ];
    }

    public function params() : array
    {
        return [
            'fields' => $this->fields(),
            'labels' => $this->labels(),
            'validations' => $this->validations(),
        ];
    }
    public function columns() : array
    {
        /*
         * parameter length must sum up 9 in the end
         */
        return [
            [
                'name' => 'name',
                'label' => 'Language',
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
