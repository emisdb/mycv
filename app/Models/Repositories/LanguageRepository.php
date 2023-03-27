<?php

namespace App\Models\Repositories;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageRepository extends  DictRepository
{
    const DICT_ID = "lang";
    const DICT_LABEL_LIST = "Languages";
    const DICT_LABEL_FORM = "Language";

    protected $model;
     public function getData($id = 0) : array
    {
        $this->model = new Language();
        if($id) {
            return $this->model->find($id)->toArray();
        } else {
            return $this->model->all()->toArray();
        }
    }
    public function setData(Request $request, $id = 0) : bool
    {
        $request->validate($this->getValidation());
        $this->model = new Language();
        if($id) {
            return $this->model->find($id)->update($request->all());
        } else {
            return is_object($this->model->create($request->all()));
        }
    }

    public function test()
    {
        return $this->getValidation();
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
                'length' => 6,
                  'type' => 'text',
           ],
             [
                'name' => 'locale',
                'label' => 'Locale',
                'validation' => ['required','string','max:5'],
                'length' => 3,
                  'type' => 'text',
           ],
        ];
    }


}
