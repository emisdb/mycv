<?php

namespace App\Models\Feeds;

interface FeedInterface
{
    /**
     * @return array
     */
    public function getData(): array;
    /**
     * @return array
     */
    public function getText(): array;

}
