<?php

namespace App\Providers;

use App\Services\DashboardContentService;
use App\Services\Media\ContentMediaService;
use App\Services\WebsiteContentService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use JsonException;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register() : void
    {
        $this->app->bind(DashboardContentService::class, function ($app) {
            return new DashboardContentService();
        });

        $this->app->bind(WebsiteContentService::class, function ($app) {
            return new WebsiteContentService();
        });

        $this->app->bind(ContentMediaService::class, function ($app) {
            return new ContentMediaService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot() : void
    {
        Validator::extend('without_tags', function ($attribute, $value, $parameters, $validator) {
            return strip_tags($value) === $value;
        });

        Validator::extend('keyword_array', function ($attribute, $value, $parameters, $validator) {
            try {
                $decodedValue = json_decode($value, true, 512, JSON_THROW_ON_ERROR);
                return is_array($decodedValue) && count($decodedValue) > 0;
            } catch (JsonException $e) {
                return false;
            }
        });
    }
}
