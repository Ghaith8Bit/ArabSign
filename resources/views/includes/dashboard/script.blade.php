{{-- Font Awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- Perfect ScrollBar --}}
<script src="{{ asset('assets/dashboard/js/perfect-scrollbar.min.js') }}"></script>

{{-- Variables --}}
<script>
    var perfectScrollbarCSS = "{{ asset('assets/dashboard/css/perfect-scrollbar.css') }}";
    var perfectScrollbarJS = "{{ asset('assets/dashboard/js/perfect-scrollbar.js') }}";
    var NavbarCollapseJS = "{{ asset('assets/dashboard/js/navbar-collapse.js') }}";
    var SidenavBurgerJS = "{{ asset('assets/dashboard/js/sidenav-burger.js') }}";
    var NavbarStickyJS = "{{ asset('assets/dashboard/js/navbar-sticky.js') }}";
</script>

{{-- Soft Ui Tailwind --}}
<script src="{{ asset('assets/dashboard/js/soft-ui-dashboard-tailwind.js') }}"></script>
