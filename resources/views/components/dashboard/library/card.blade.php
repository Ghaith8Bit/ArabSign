<a href="#"
    class="group relative block bg-black rounded-3xl hover:scale-105 transition delay-150 {{ Request::has('redirected') ? 'cursor-pointer' : 'cursor-default' }} "
    style="direction: rtl; position: relative;"
    onclick="{{ Request::has('redirected') ? 'location.href = \'' . Request::get('redirected') . '?resource_id=' . $resource->id . '&resource_keyword=' . $resource->keyword . '\'' : 'event.preventDefault()' }}">
    @switch($resource->type)
        @case(App\Enums\LibraryTypeEnum::Video)
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/video.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
        @break

        @case(App\Enums\LibraryTypeEnum::Facebook)
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/facebook.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
        @break

        @case(App\Enums\LibraryTypeEnum::Instagram)
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/instagram.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
        @break

        @case(App\Enums\LibraryTypeEnum::YouTube)
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/youtube.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
        @break

        @case(App\Enums\LibraryTypeEnum::TikTok)
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/tiktok.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
        @break

        @case(App\Enums\LibraryTypeEnum::X)
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/x.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
        @break

        @default
            <img alt="{{ $resource->keyword }}" src="{{ asset('assets/dashboard/pages/library/images/image.jpg') }}"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-3xl" />
    @endswitch

    <div class="relative p-4 sm:p-6 lg:p-8" dir="ltr">
        <p class="mb-32 sm:mb-48 lg:mb-64 bg-white inline-block px-2 py-1 rounded-lg text-md">
            {{ $resource->keyword }}
        </p>
        <div
            class="absolute inset-0 flex items-center justify-evenly opacity-0 transition-opacity group-hover:opacity-100 top-[20%] ease-in delay-150 translate-y-0 z-40 {{ Request::has('redirected') ? 'hidden' : '' }}">
            <!--icon for play-vedio-->
            <i class="fas fa-play-circle text-white text-4xl opacity-70 hover:opacity-100 img-add cursor-pointer"
                onclick="openShowModal({{ json_encode($resource) }})"></i>
            <!-- Delete Icon -->
            <i class="fa-solid fa-trash text-red-500 hover:text-red-700 text-2xl mx-2 opacity-70 cursor-pointer"
                onclick="openDeleteModal('{{ route('dashboard.library.destroy', $resource->id) }}' )"></i>
        </div>
    </div>

</a>
