<?php

namespace App\Models\Repositories;

interface RepositoryInterface
{
    /**
     * @return array
     */
    public function getId(): array;
    /**
     * @param int|null $id
     * @return array
     */
    public function getData($id): array;
    /**
     * @return array
     */
    public function columns() : array;
}
