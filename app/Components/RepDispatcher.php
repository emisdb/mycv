<?php

namespace App\Components;
use App\Models\Repositories\LanguageRepository;
use App\Models\Repositories\FeatureRepository;
use App\Models\Repositories\RepositoryInterface;

class RepDispatcher
{
    const REP_NAMESPACE = "App\\Models\\Repositories\\";
    public static $paths = [
        'lang' => LanguageRepository::class,
        'feat' => FeatureRepository::class,
    ];
    public static function dispatch($tab) : RepositoryInterface
    {
        if ($rep = static::$paths[$tab]) {
            $class = $rep;
            return new $class;
        }
        throw new \Exception("No such dictionary");
    }

}


