<?php

namespace App\Models\Repositories;

use Illuminate\Http\Request;

abstract class MultiLevelDictRepository extends DictRepository implements RepositoryInterface, MultilevelListRepositoryInterface
{
    const DICT_ID = "mldict";
    const DICT_LABEL_LIST = "Multilevel Dictionaries";
    const DICT_LABEL_FORM = "Multilevel Dictionary";

    public abstract function getSubData($id) : array;



}
