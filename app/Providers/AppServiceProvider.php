<?php

namespace App\Providers;

use App\Models\Feeds\FeedInterface;
use App\Models\Feeds\Index;
use App\Services\IndexService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(FeedInterface::class, Index::class);
        $this->app->singleton(IndexService::class, function ($app) {
            return new IndexService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
