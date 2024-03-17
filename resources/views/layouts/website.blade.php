<!DOCTYPE html>
<html dir="{{ Config::get('app.locale') === 'ar' ? 'rtl' : 'ltr' }}" lang="{{ Config::get('app.locale') }}">

<head>
    <!-- Meta tags -->
    @yield('meta')
    @include('includes.home.meta')

    <!-- Styles -->
    @yield('styles')
    @include('includes.home.style')
</head>

<body class="text-textColor overflow-x-hidden scrollbar-blue-darkblue m-0 b-0 antialiased">
    <header>
        <x-website.navigation-menu />
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <x-website.footer-menu />
    </footer>

    <!-- Scripts -->
    @yield('scripts')
    @include('includes.home.script')

    <!-- Structured data -->
    @yield('structured_data')
</body>

</html>
