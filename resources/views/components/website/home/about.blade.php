<section class="flex flex-col gap-14 mt-24">
    <x-website.home.section-break :title="'من نحن'" />
    <div
        class="container w-[90%] bg-neutral-100 rounded-3xl shadow-lg shadow-slate-800/40 mx-auto p-8 flex flex-col gap-8 relative">
        <img src="{{ asset('assets/website/pages/home/images/points.svg') }}" alt="نقاط"
            class="absolute top-2 right-8 hidden md:block">
        <div class="self-center">
            <h3 class="text-center text-3xl border-solid border-b-4 border-secondaryColor">خدماتنا</h3>
        </div>
        <div class="flex flex-row justify-between">
            <div class="flex flex-row gap-4">
                <img src="{{ asset('assets/website/pages/home/images/about/road.svg') }}" class="min-h-full"
                    alt="رؤية الشركة">
                <div class="flex flex-col justify-between h-[90%] m-auto">
                    <p class="text-lg">إنتاج محتوى مرئي متنوع بلغة الإشارة</p>
                    <p class="text-lg">موقعنا الألكتروني يتيح إمكانية مشاهدة الكثير من القنوات بلغة الإشارة</p>
                    <p class="text-lg">خدمات تعليمة مختلفة</p>
                </div>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/website/pages/home/images/about/right-img.svg') }}"
                    class="mb-36 hidden xl:block" alt="كتاب مذكرات">
                <img src="{{ asset('assets/website/pages/home/images/about/mid-img.svg') }}"
                    class="hidden lg:block lg:ml-14 xl:ml-0" alt="إشارة ربط اصبعين">
                <img src="{{ asset('assets/website/pages/home/images/about/left-img.svg') }}"
                    class="-mb-36 hidden xl:block" alt="جهاز لوحي و كتاب">
            </div>
        </div>
    </div>
</section>
