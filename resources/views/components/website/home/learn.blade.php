<section class="flex flex-col gap-14 mt-32">
    <x-website.home.section-break :title="'تعليم لغة الاشارة'" />
    <h2 class="text-center font-normal text-2xl leading-9 p-2">نقدم لكم آلية تعلم مصطلحات القاموس العربي الإشاري الموحد
        مع شروحات مصورة</h2>

    <div class="flex flex-col lg:flex-row justify-start  relative lg:items-end xl:items-end gap-y-6 lg:gap-0">
        <div class="bg-gradient-to-b from-primaryColor to-secondaryColor  flex-col xl:w-3/5 lg:w-2/4 h-[455px] flex justify-center rounded-tl-[200px] rounded-bl-2xl relative  max-lg:rounded-none sm:w-full md:w-full"
            id="slider-width">
            <img src="{{ asset('assets/website/pages/home/images/learn/big-ellipse.svg') }}"
                class="absolute left-[24%] top-0" alt="شكل دائري كبير">
            <img src="{{ asset('assets/website/pages/home/images/learn/small-polygon.svg') }}"
                class="absolute top-[16%] right-[4%]" alt="مضلع سداسي صغير">
            <img src="{{ asset('assets/website/pages/home/images/learn/small-polygon.svg') }}"
                class="absolute bottom-[2%] right-[16%]" alt="مضلع سداسي صغير">
            <img src="{{ asset('assets/website/pages/home/images/learn/white-points.svg') }}"
                class="absolute left-[4%] top-[6%]" alt="نقاط بيضاء صغيرة">
            <div class="owl-carousel owl-theme mt-20" id="learn-carousel">
                @for ($i = 0; $i < 4; $i++)
                    <x-website.home.learn.card />
                @endfor
            </div>
        </div>
        <div class="mx-auto">
            <img src="{{ asset('assets/website/pages/home/images/learn/main.svg') }}" alt="شخصين يتحدثان بلغة الإشارة">
        </div>
    </div>
    <div class="self-center">
        <a href="#">
            <button
                class="text-white px-2 py-3 rounded-md bg-gradient-to-r from-secondaryColor to-primaryColor shadow-md shadow-slate-700/50 text-center flex items-center">
                المزيد
                <img src="{{ asset('assets/website/pages/home/images/content/left-arrow.svg') }}"
                    alt="سهم يشير إلى اليسار">
            </button>
        </a>
    </div>
</section>
