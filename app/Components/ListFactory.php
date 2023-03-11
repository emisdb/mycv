<?php

namespace App\Components;

use App\Models\Repositories\RepositoryInterface;

class ListFactory
{
    const REP_NAMESPACE = "App\\Models\\Repositories\\";
    /*
     * @param RepositoryInterface $model
     */
    protected  $model;

    /**
     * @return mixed
     */
    public function __construct(RepositoryInterface $model)
    {
        $this->model = $model;
    }

    public  function manage($tab): array
    {
        return ['dataset' => $this->model->getData(), 'params' => $this->model->columns(), 'title' => $this->model->getId()];
     }

}
