<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/soft-ui-dashboard-tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/perfect-scrollbar.css') }}">

    <title>@yield('title')</title>
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <x-dashboard.side-navigation-menu />

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-dashboard.navigation-menu />
        </div>
    </main>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('assets/dashboard/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var perfectScrollbarCSS = "{{ asset('assets/dashboard/css/perfect-scrollbar.css') }}";
        var perfectScrollbarJS = "{{ asset('assets/dashboard/js/perfect-scrollbar.js') }}";
        var NavbarCollapseJS = "{{ asset('assets/dashboard/js/navbar-collapse.js') }}";
        var SidenavBurgerJS = "{{ asset('assets/dashboard/js/sidenav-burger.js') }}";
        var NavbarStickyJS = "{{ asset('assets/dashboard/js/navbar-sticky.js') }}";
    </script>
    <script src="{{ asset('assets/dashboard/js/soft-ui-dashboard-tailwind.js') }}"></script>

</body>

</html>
