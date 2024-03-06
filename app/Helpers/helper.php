<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

/**
 * Generate breadcrumbs based on the current route.
 *
 * @return array
 */
if (! function_exists('generateBreadcrumbs')) {
    function generateBreadcrumbs()
    {
        $currentRoute = Route::getCurrentRequest()->getRequestUri();
        $baseUrl = strtok($currentRoute, '?');
        $segments = explode('/', $baseUrl);
        $segments = array_filter($segments);
        return collect($segments);
    }
}
