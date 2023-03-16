<?php

namespace App\Models\Repositories;

use Illuminate\Http\Request;

abstract class DictRepository implements RepositoryInterface
{
    const DICT_ID = "dict";
    const DICT_LABEL_LIST = "Dictionaries";
    const DICT_LABEL_FORM = "Dictionary";

    /**
     * @return array
     */
    public function getId(): array
    {
        return [self::DICT_ID, self::DICT_LABEL_LIST, self::DICT_LABEL_FORM];
    }
    /**
     * @return string
     */
    public function name() : string
    {
        return self::DICT_LABEL_FORM;
    }

    public abstract function setData(Request $request, $id): bool;

    /**
     * @param int|null $id
     * @return array
     */
    public abstract function getData($id): array;

    /**
     * @return array
     */
    protected function getValidation(): array
    {
        $result = [];
        foreach ($this->columns() as $column) {
            $result [$column['name']] = $column['validation'];
        }
        return $result;
    }

    public function getList(): array
    {
        return ['dataset' => $this->getData(), 'params' => $this->columns(), 'title' => $this->getId()];
    }

    public function getForm($id = 0): array
    {
        if ($id) {
            return ['dataset' => $this->getData($id), 'params' => $this->columns(), 'title' => $this->getId()];
        } else {
            return ['dataset' => [], 'params' => $this->columns(), 'title' => $this->getId()];
        }
    }

    public function columns(): array
    {
        /*
         * parameter length must sum up 9 in the end
         */
        return [
            [
                'name' => 'dict',
                'label' => 'Dictionary',
                'validation' => [],
                'length' => 9
            ],
        ];
    }


}
