<!-- Navigation Bar -->
<nav
    class="flex md:justify-around justify-between flex-row-reverse items-center w-full mx-auto shadow-md shadow-slate-700/50 bg-white">
    <!-- Logo -->
    <div>
        <img class="w-24 cursor-pointer" src="{{ asset('assets/website/images/nav/logo.svg') }}" alt="إشارة عربي">
    </div>

    <!-- Navigation Links Container -->
    <div
        class="nav-links md:py-0 duration-500 md:static absolute z-30 bg-white md:min-h-fit min-h-[50vh] left-0 top-[-90%] md:w-auto w-full flex items-center px-5 justify-center">
        <!-- Navigation Links -->
        <ul
            class="flex md:flex-row-reverse flex-col md:items-center lg:gap-[4vw] md:gap-[3vw] gap-8 items-center w-full">
            <li><a class="hover:text-gray-800 md:nav-bottom-line" href="{{ route('website.home') }}">الرئيسية</a></li>
            <li><a class="hover:text-gray-800 md:nav-bottom-line" href="{{ route('website.content.index') }}">المحتوى
                    المرئي</a>
            </li>
            <li><a class="hover:text-gray-800 md:nav-bottom-line" href="#">تعلم لغة الإشارة</a></li>
            <li><a class="hover:text-gray-800 md:nav-bottom-line" href="#">المقالات</a></li>
            <li><a class="hover:text-gray-800 md:nav-bottom-line" href="#">المدرب</a></li>
            <li><a class="hover:text-gray-800 md:nav-bottom-line" href="#">من نحن</a></li>
        </ul>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-row-reverse items-center gap-6">
        <!-- Contact Us Button -->
        <button
            class="middle none center rounded-lg bg-gradient-to-r from-secondaryColor to-primaryColor py-3 px-6 text-sm text-white shadow-md shadow-primaryColor transition-all hover:shadow-lg hover:shadow-secondaryColor"
            data-ripple-light="true">تواصل معنا</button>
        <!-- Menu Toggle Button -->
        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden mr-4"></ion-icon>
    </div>
</nav>
