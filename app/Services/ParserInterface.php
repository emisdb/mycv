<?php

namespace App\Services;

interface ParserInterface
{
    /**
     * @return array
     */
    public function handle(): array;

}
