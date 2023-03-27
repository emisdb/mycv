<?php

namespace App\Components;
use App\Models\Repositories\RepositoryInterface;
use App\Models\Repositories\MultilevelListRepositoryInterface;
use App\Models\Repositories\LanguageRepository;
use App\Models\Repositories\FeatureRepository;
use App\Models\Repositories\IdeaRepository;
use App\Models\Repositories\TopicRepository;
use App\Models\Repositories\ProjectRepository;

class RepDispatcher
{
    const REP_NAMESPACE = "App\\Models\\Repositories\\";
    public static $reps = [
        'lang' => LanguageRepository::class,
        'feat' => FeatureRepository::class,
        'idea' => IdeaRepository::class,
        'topic' => TopicRepository::class,
        'proj' => ProjectRepository::class,
    ];
    public static $mlreps = [
        'topic' => TopicRepository::class,
        'idea' => IdeaRepository::class,
    ];
    public static function dispatch($tab) : RepositoryInterface
    {
        if ($rep = static::$reps[$tab]) {
            $class = $rep;
            return new $class;
        }
        throw new \Exception("No such dictionary");
    }
    public static function ml_dispatch($tab) : MultilevelListRepositoryInterface
    {
        if ($rep = static::$mlreps[$tab]) {
            $class = $rep;
            return new $class;
        }
        throw new \Exception("No such dictionary");
    }

}


