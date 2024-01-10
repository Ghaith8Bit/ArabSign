 <!-- Character Encoding -->
 <meta charset="UTF-8">

 <!-- Viewport for Responsive Design -->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Content Type and Charset -->
 <meta http-equiv="content-type" content="text/html;charset=UTF-8">

 <!-- Favicon -->
 <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

 <!-- Language of the Page -->
 <meta name="language" content="{{ Config::get('app.locale') }}">

 <!-- Canonical URL -->
 <link rel="canonical" href="{{ Request::url() }}">

 <!-- Alternate Media Type -->
 <link rel="alternate" type="application/pdf" href="{{ asset('path-to-pdf.pdf') }}">

 <!-- Sitemap Link -->
 <link rel="sitemap" type="application/xml" href="{{ asset('sitemap.xml') }}">

 <!-- Laravel Generator -->
 <meta name="generator" content="Laravel">

 <!-- Robots Meta Tags for Crawlers -->
 <meta name="robots" content="index, follow">
 <meta name="googlebot" content="index, follow">
 <meta name="bingbot" content="index, follow">
 <meta name="yahoo-slurp" content="index, follow">
 <meta name="msnbot" content="index, follow">
 <meta name="yandex" content="index, follow">

 <!-- Revisit After -->
 <meta name="revisit-after" content="7 days">

 <!-- Copyright Information -->
 <meta name="copyright" content="Copyright © {{ date('Y') }} {{ Config::get('app.name') }}">

 <!-- Meta Description and Keywords -->
 <meta name="description" content="@yield('meta_description')">
 <meta name="keywords" content="@yield('meta_keywords')">

 <!-- Open Graph (OG) Tags for Social Sharing -->
 <meta property="og:title" content="@yield('og_title')">
 <meta property="og:description" content="@yield('og_description')">
 <meta property="og:image" content="{{ asset('og-image.jpg') }}">
 <meta property="og:url" content="{{ Request::url() }}">
 <meta property="og:type" content="@yield('og_type')">

 <!-- Manifest Link -->
 {{-- <link rel="manifest" href="/manifest.json"> --}}

 <!-- Page Title -->
 <title>@yield('meta_title')</title>
