<?php
// app/Providers/BladeServiceProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Define and register the @vite directive
        Blade::directive('vite', function ($expression) {
            // Process the directive and return the desired output
            return "<?php echo vite_asset($expression); ?>";
        });
    }
}

