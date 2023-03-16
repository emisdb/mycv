<?php

namespace App\Models\Repositories;

use Illuminate\Http\Request;

interface RepositoryInterface
{
    /**
     * @return array
     */
    public function getId(): array;
    /**
     * @return array
     */
    public function getList(): array;
    /**
     * @param Request $req
     * @param int|null $id
     * @return bool
     */
    public function setData(Request $request,$id): bool;

    /**
     * @param int|null $id
     * @return array
     */
    public function getData($id): array;
    /**
     * @return array
     */
    public function columns() : array;
   /**
      * @return string
     */
    public function name(): string;
}
