<?php

namespace App\Models\Repositories;

use Illuminate\Http\Request;

interface MultilevelListRepositoryInterface
{
    /**
     * @param int $id
     * @return array
     */
    public function getSubList(int $id): array;
    /**
     * @param int $id
     * @return array
     */
    public function getPath(int $id) : array;

 }
