<?php

namespace App\Models\Repositories;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectRepository extends  DictRepository
{
    const DICT_ID = "proj";
    const DICT_LABEL_LIST = "Projects";
    const DICT_LABEL_FORM = "Project";

    protected $model;


    protected function setDate(array $arr): array
    {
        $arr['start'] = $this->makeDate($arr['start']);
        $arr['finish'] = $this->makeDate($arr['finish']);
        return $arr;
    }
    protected function setDates(array $arrs): array
    {
        $res = [];
        foreach ($arrs as $arr){
            $res[] = $this->setDate($arr);
        }
        return $res;
    }
    public function delete($id) : array
    {
        $this->model = new Project();
        $result['parent'] = 0;
        $result['success'] = $this->model->find($id)->delete();
        return $result;
    }
        public function getData($id = 0) : array
    {
        $this->model = new Project();
        if($id) {
            return $this->setDate($this->model->find($id)->toArray());
        } else {
            return $this->setDates($this->model->orderBy('start','DESC')->get()->toArray());
        }
    }

    public function setData(Request $request, $id = 0) : bool
    {
        $request->validate($this->getValidation());
        $this->model = new Project();
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
                'label' => 'Project',
                'validation' =>  ['required','string','max:32'],
                'type' => 'text',
                'length' => 5
            ],
            [
                'name' => 'start',
                'label' => 'Start',
                'validation' => ['required','int'],
                'length' => 2,
                'type' => 'datestamp',
            ],
            [
                'name' => 'finish',
                'label' => 'Finish',
                'validation' => ['required','int'],
                'length' => 2,
                'type' => 'datestamp',
            ],
        ];
    }


}
