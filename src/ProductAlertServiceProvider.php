<?php

namespace Rapidez\ProductAlert;

use Illuminate\Support\ServiceProvider;

class ProductAlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rapidez-product-alert');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/rapidez-product-alert'),
        ], 'views');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}
