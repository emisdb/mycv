<?php

namespace App\Components;
use App\Models\Repositories\RepositoryInterface;
use App\Models\Repositories\LanguageRepository;
use App\Models\Repositories\FeatureRepository;
use App\Models\Repositories\IdeaRepository;
use App\Models\Repositories\TopicRepository;

class RepDispatcher
{
    const REP_NAMESPACE = "App\\Models\\Repositories\\";
    public static $paths = [
        'lang' => LanguageRepository::class,
        'feat' => FeatureRepository::class,
        'idea' => IdeaRepository::class,
        'topic' => TopicRepository::class,
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


