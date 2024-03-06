<?php

namespace App\Providers;

use App\Services\CategoryService;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register() : void
    {
        $this->app->bind(CategoryService::class, function ($app) {
            return new CategoryService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot() : void
    {
        //
    }
}
