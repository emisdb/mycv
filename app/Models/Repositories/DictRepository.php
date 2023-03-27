<?php

namespace App\Models\Repositories;

use Illuminate\Http\Request;
use App\Components\DateFormat;

abstract class DictRepository implements RepositoryInterface
{
    const DICT_ID = "dict";
    const DICT_LABEL_LIST = "Dictionaries";
    const DICT_LABEL_FORM = "Dictionary";
    const DICT_IS_MULTILEVEL = false;

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
        ];
    }
    /**
     * @return string
     */
    public function name() : string
    {
        return static::DICT_LABEL_FORM;
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
    protected function makeDate(string $stamp): array
    {
        $df = new DateFormat($stamp);
        return [
            'type' => 'datestamp',
            'value' => $stamp,
            'date' => $df->getMonthShort() . " " . $df->getYear(),
            'month' => $df->getMonth(),
            'year' => $df->getYear()
        ];

    }

    protected function makeLink(int $id, string $name, string $dict = ""): array
    {
        return [
            'type'      => 'link',
            'route'     => 'dict.six',
            'params'    => [empty($dict) ? static::DICT_ID : $dict, $id],
            'value'      => $name
        ];
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
                'length' => 9,
                'type' => 'text'
            ],
        ];
    }


}
