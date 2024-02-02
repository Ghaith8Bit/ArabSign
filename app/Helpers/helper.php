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
        $segments = explode('/', $currentRoute);

        $segments = array_filter($segments);

        $lastSegment = end($segments);

        $lastSegment = strpos($lastSegment, '?') !== false ? strstr($lastSegment, '?', true) : $lastSegment;

        array_pop($segments);

        $segments[] = $lastSegment;

        return collect($segments);
    }
}
