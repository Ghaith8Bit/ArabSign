<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    @include('includes.dashboard.style')
    @yield('style')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <x-dashboard.side-navigation-menu />

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-dashboard.navigation-menu />

        <div class="px-12">
            @yield('content')
        </div>
        <x-dashboard.footer-menu />
    </main>

    @yield('modal')
    @include('includes.dashboard.script')
    @yield('script')
</body>

</html>
