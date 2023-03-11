<?php

namespace App\Models\Repositories;

use App\Models\Language;

class LanguageRepository implements RepositoryInterface
{
    const DICT_ID = "lang";
    const DICT_LABEL = "Languages";

    protected $model;
    public function getId() : array
    {
        return [self::DICT_ID, self::DICT_LABEL];
    }
    public function getData($id = 0) : array
    {
        $this->model = new Language();
        if($id) {
            return $this->model->find($id)->toArray();
        } else {
            return $this->model->all()->toArray();
        }
    }
    private function labels()
    {
        return [
            'name' => 'Language',
            'locale' => 'Locale'
        ];
    }
    private function validations()
    {
        return [
            'name' => ['required','string','max:32'],
            'locale' => ['required','string','max:5'],
        ];
    }

    private function fields()
    {
        return [
            'name',
            'locale'
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
                'length' => 6
            ],
             [
                'name' => 'locale',
                'label' => 'Locale',
                'validation' => ['required','string','max:5'],
                'length' => 3
            ],
        ];
    }


}
