<section class="flex flex-col gap-14 mt-32">
    <x-website.home.section-break :title="'المقالات'" />
    <div
        class="bg-gradient-to-b from-secondaryColor to-primaryColor opacity-90 flex-col w-11/12 m-auto h-[620px] flex justify-center max-md:w-full  rounded-2xl relative max-md:rounded-none">
        <img src="{{ asset('assets/website/pages/home/images/blog/big-ellipse.svg') }}" class="absolute top-0 left-[12%]"
            alt="شكل دائري كبير">
        <img src="{{ asset('assets/website/pages/home/images/blog/small-polygon.svg') }}"
            class="absolute bottom-[5%] right-[2%]" alt="مضلع سداسي صغير">
        <img src="{{ asset('assets/website/pages/home/images/blog/small-polygon.svg') }}"
            class="absolute right-[42%] top-[10%]" alt="مضلع سداسي صغير">
        <img src="{{ asset('assets/website/pages/home/images/blog/small-polygon.svg') }}"
            class="absolute left-[12%] bottom-[-3%]" alt="مضلع سداسي صغير">
        <img src="{{ asset('assets/website/pages/home/images/blog/small-polygon.svg') }}"
            class="absolute bottom-[28%] left-[44%]" alt="مضلع سداسي صغير">
        <img src="{{ asset('assets/website/pages/home/images/blog/white-points.svg') }}"
            class="absolute left-[2%] top-[5%]" alt="نقاط بيضاء صغيرة">
        <div class="owl-carousel owl-theme" id="blog-carousel">
            @for ($i = 0; $i < 3; $i++)
                <x-website.home.blog.card />
            @endfor
        </div>
    </div>
