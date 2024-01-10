<footer
    class="mt-14 bg-gradient-to-b from-primaryColor to-secondaryColor w-full h-4/5 relative max-md:rounded-none rounded-tl-[200px] ">
    <img src="{{ asset('assets/website/images/footer/big-ellipse.svg') }}" class="absolute right-[70%] hidden md:block"
        alt="شكل دائري كبير">
    <img src="{{ asset('assets/website/images/footer/small-polygon.svg') }}"
        class="absolute right-[60%] bottom-[12%] hidden md:block" alt="مضلع سداسي صغير">
    <img src="{{ asset('assets/website/images/footer/small-polygon.svg') }}"
        class="absolute right-[50%] top-[-4%] hidden md:block" alt="مضلع سداسي صغير">
    <img src="{{ asset('assets/website/images/footer/white-points.svg') }}" class="absolute right-[91%] hidden md:block"
        alt="نقاط بيضاء صغيرة">
    <div class="flex max-md:flex-col  justify-around py-20 items-center flex-row sm:gap-12 max-sm:gap-12 "
        id="footer-edit">
        <div
            class="text-white font-bold flex-col justify-start items-start gap-2 flex mb-6 md:mb-0 max-lg:hidden max-md:hidden">
            <h2 class="font-bold text-white text-3xl">روابط هامة</h2>
            <ul class="justify-center gap-2 flex flex-col">
                <li><a href="#" class="text-white text-xl font-normal">المحتوى المرئي</a></li>
                <li><a href="#" class="text-white text-xl font-normal">الرئيسية</a></li>
                <li><a href="#" class="text-white text-xl font-normal">من نحن</a></li>
                <li><a href="#" class="text-white text-xl font-normal">الدورات التدريبية</a></li>
                <li><a href="#" class="text-white text-xl font-normal">تعلم لغة الإشارة</a></li>
            </ul>
        </div>
        <div class="flex flex-col items-center gap-y-4 mb-6 md:mb-0">
            <p class="font-bold text-3xl text-white text-center">روابط مواقعنا على شبكات التواصل الاجتماعي</p>
            <ul class="flex gap-6 ">
                <li>
                    <a href="#" class="">
                        <img src="{{ asset('assets/website/images/footer/youtube-white.svg') }}" alt="يوتيوب">
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <img src="{{ asset('assets/website/images/footer/facebook-white.svg') }}" alt="فيسبوك">
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <img src="{{ asset('assets/website/images/footer/linked-in-white.svg') }}" alt="لينكد أن">
                    </a>
                </li>
                <li>
                    <a href="#" class="">
                        <img src="{{ asset('assets/website/images/footer/instagram-white.svg') }}" alt="انستغرام">
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex gap-2 flex-col items-center">
            <img src="{{ asset('assets/website/images/footer/arab-synce-white.svg') }}">
            <h2 class="font-normal text-3xl leading-10 text-white">منصة إشارة عربي</h2>
            <div class="flex items-center">
                <img src="{{ asset('assets/website/images/footer/rightComma.svg') }}" alt="فاصلة يمينية"
                    class="mb-6 w-4 h-6">
                <p class="text-lg -tracking-tight leading-9 font-normal text-white">العالم يناديك</p>
                <img src="{{ asset('assets/website/images/footer/leftComma.svg') }}" alt="فاصلة يسارية"
                    class="mt-3 w-4 h-6">
            </div>
        </div>
    </div>

    <div class="flex flex-row items-center justify-center gap-x-1">
        <span><img src="{{ asset('assets/website/images/footer/copyright.svg') }}" alt="رمز حقوق الملكية"></span>
        <p class="font-normal text-xl text-white leading-8">جميع حقوق النشر محفوظة - منصة إشارة عربي
            {{ \Carbon\Carbon::now()->format('Y') }}</p>
    </div>
</footer>
