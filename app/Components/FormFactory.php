<?php

namespace App\Components;

use App\Models\Repositories\RepositoryInterface;

class FormFactory
{
    /*
     * @param RepositoryInterface $model
     */
    protected  $model;
    protected  $id;

    /**
     * @return mixed
     */
    public function __construct(RepositoryInterface $model, int $id)
    {
        $this->model = $model;
        $this->id = $id;
    }

    public  function manage(): array
    {
        return ['dataset' => $this->model->getData($this->id), 'params' => $this->model->columns(), 'title' => $this->model->getId()];
     }

}
