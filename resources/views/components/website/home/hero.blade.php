<!-- Header -->
<section
    class="bg-gradient-to-r from-secondaryColor to-primaryColor flex flex-row lg:justify-start justify-center items-center relative -z-10">
    <!-- Polygon Images -->
    <img src="{{ asset('assets/website/pages/home/images/hero/polygon1.svg') }}"
        class="absolute right-0 top-0 hidden xl:block lg:hidden md:block" alt="شكل مضلع">
    <img src="{{ asset('assets/website/pages/home/images/hero/polygon2.svg') }}"
        class="absolute right-0 hidden xl:block lg:hidden md:block" alt="شكل مضلع">

    <!-- Content Container -->
    <div class="flex flex-col items-center justify-center gap-y-20 my-14 xl:mx-36 lg:mx-10 mx-0">
        <!-- Title and Subtitle -->
        <div class="flex flex-col items-center gap-3 text-white">
            <h1 class="text-5xl font-bold -tracking-wide">إشارة عربي</h1>
            <span class="text-xl mt-3">العالم بين يديك</span>

            <!-- Description -->
            <div class="flex items-center">
                <img src="{{ asset('assets/website/pages/home/images/hero/comma-right.svg') }}" class="mb-4 ml-2 w-4"
                    alt="فاصلة يمينية">
                <p class="text-xl -tracking-tight">منصة لعرض محتوى مرئي متنوع بلغة الاشارة</p>
                <img src="{{ asset('assets/website/pages/home/images/hero/comma-left.svg') }}" class="mt-4 mr-2 w-4"
                    alt="فاصلة يسارية">
            </div>
        </div>

        <!-- Roadmap Image -->
        <img src="{{ asset('assets/website/pages/home/images/hero/roadmap.svg') }}"
            alt="خريطة طريق لتوضيح خطة و رؤية المشروع">
    </div>

    <!-- Shape Images -->
    <div class="lg:block hidden -z-10">
        <img src="{{ asset('assets/website/pages/home/images/hero/shape1.svg') }}" class="absolute left-0 bottom-0"
            alt="مضلعات شفافة">
        <img src="{{ asset('assets/website/pages/home/images/hero/shape2.svg') }}" class="absolute left-0 bottom-0"
            alt="مضلعات شفافة">
        <img src="{{ asset('assets/website/pages/home/images/hero/child.png') }}" class="absolute left-0 bottom-0"
            alt="طفل صغير أصم">
    </div>
</section>
