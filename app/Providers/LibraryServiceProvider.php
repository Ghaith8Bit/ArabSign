<?php

namespace App\Providers;

use App\Services\LibraryMediaService;
use App\Services\ResourceService;
use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register() : void
    {
        $this->app->bind(LibraryMediaService::class, function ($app) {
            return new LibraryMediaService();
        });
        $this->app->bind(ResourceService::class, function ($app) {
            return new ResourceService();
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
