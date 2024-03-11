<aside
    class="max-w-62.5 ease-nav-brand z-30 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <span sidenav-close></span>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ route('website.home') }}">
            <img src="{{ asset('assets/dashboard/images/nav/logo.png') }}"
                class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12" alt="إشارة عربي" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Arab Sign</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li
                class="mt-0.5 w-10/12 mx-auto @if (Route::is('dashboard.home')) {{ '!bg-primaryColor !text-white !font-semibold !rounded-xl' }} @endif">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('dashboard.home') }}">
                    <div
                        class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-house text-primaryColor"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Home</span>
                </a>
            </li>
            <li
                class="mt-0.5 w-10/12 mx-auto @if (Route::is('dashboard.category.index')) {{ '!bg-primaryColor !text-white !font-semibold !rounded-xl' }} @endif">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('dashboard.category.index') }}">
                    <div
                        class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-list text-primaryColor"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Category</span>
                </a>
            </li>
            <li
                class="mt-0.5 w-10/12 mx-auto @if (Route::is('dashboard.library.index')) {{ '!bg-primaryColor !text-white !font-semibold !rounded-xl' }} @endif">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('dashboard.library.index') }}">
                    <div
                        class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-folder text-primaryColor"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Library</span>
                </a>
            </li>
            <li
                class="mt-0.5 w-10/12 mx-auto @if (Route::is('dashboard.content.index') ||
                        Route::is('dashboard.content.edit') ||
                        Route::is('dashboard.content.create')) {{ '!bg-primaryColor !text-white !font-semibold !rounded-xl' }} @endif">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="{{ route('dashboard.content.index') }}">
                    <div
                        class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                        <i class="fa-solid fa-video text-primaryColor"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Content</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
