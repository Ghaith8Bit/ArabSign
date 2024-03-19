<!-- Navigation Bar -->
<nav
    class="flex md:justify-around justify-between flex-row items-center w-full mx-auto shadow-md shadow-slate-700/50 bg-white">
    <!-- Logo -->
    <div>
        <img class="w-24 cursor-pointer" src="{{ asset('assets/website/images/nav/logo.png') }}" alt="إشارة عربي">
    </div>

    <!-- Navigation Links Container -->
    <div
        class="nav-links py-6 md:py-0 duration-500 md:static absolute bg-white md:min-h-fit left-0 top-[-100%] md:w-auto w-full flex items-center px-5 justify-center drop-shadow-2xl md:drop-shadow-none">
        <!-- Navigation Links -->
        <ul class="flex md:flex-row flex-col md:items-center lg:gap-[4vw] md:gap-[2vw] gap-8 text-center">
            <li><a class=" {{ Route::is('website.home') ? 'text-secondaryColor/90 font-bold cursor-default' : 'hover:text-textColor' }}"
                    href="{{ route('website.home') }}">الرئيسية</a></li>
            <li><a class="{{ Route::is('website.content.index') || Route::is('website.content.show') ? 'text-secondaryColor/90 font-bold cursor-default' : 'hover:text-textColor' }}"
                    href="{{ route('website.content.index') }}">المحتوى
                    المرئي</a></li>
            {{-- <li><a class="hover:text-gray-800" href="#">تعلم لغة الإشارة</a></li> --}}
            {{-- <li><a class="hover:text-gray-800" href="#">المقالات</a></li> --}}
            {{-- <li><a class="hover:text-gray-800" href="#">المدرب</a></li> --}}
            {{-- <li><a class="hover:text-gray-800" href="#">من نحن</a></li> --}}
        </ul>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-row items-center gap-6">
        <!-- Contact Us Button -->
        <button
            class="middle none center rounded-lg bg-gradient-to-r from-secondaryColor to-primaryColor py-3 px-6 text-sm text-white shadow-md shadow-primaryColor transition-all hover:shadow-lg hover:shadow-secondaryColor"
            data-ripple-light="true">تواصل معنا</button>
        <!-- Menu Toggle Button -->
        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden ml-4"></ion-icon>
    </div>
</nav>
