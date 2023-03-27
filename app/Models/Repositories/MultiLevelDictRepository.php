<?php

namespace App\Models\Repositories;

use Illuminate\Http\Request;

abstract class MultiLevelDictRepository extends DictRepository implements RepositoryInterface, MultilevelListRepositoryInterface
{
    const DICT_ID = "mldict";
    const DICT_LABEL_LIST = "Multilevel Dictionaries";
    const DICT_LABEL_FORM = "Multilevel Dictionary";
    const DICT_IS_MULTILEVEL = true;
    const DICT_SUBDICT = "";
    const DICT_PARENT = "";
    const DICT_PARENT_ID = "";
    const DICT_LIST_PICT = "";
    const DICT_FORM_PICT = "";

    /**
     * @return array
     */
    public function getId(): array
    {
        return [
            'id'        => static::DICT_ID,
            'list'      => static::DICT_LABEL_LIST,
            'form'      => static::DICT_LABEL_FORM,
            'is_mult'   => static::DICT_IS_MULTILEVEL,
            'sub'       => static::DICT_SUBDICT,
            'parent'    => static::DICT_PARENT,
            'parent_id' => static::DICT_PARENT_ID,
            'bground'   => [static::DICT_LIST_PICT, static::DICT_FORM_PICT,],
        ];
    }
    public abstract function getSubData($id) : array;
    public abstract function getPath(int $id) : array;
    public abstract function getSubForm($id) : array;
}
