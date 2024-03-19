<footer class="mt-14 bg-primaryColor w-full h-4/5 relative max-md:rounded-none rounded-tl-[200px]">

    <img src="{{ asset('assets/website/images/footer/small-polygon.svg') }}"
        class="absolute right-[60%] bottom-[12%] hidden md:block" alt="مضلع سداسي صغير">
    <img src="{{ asset('assets/website/images/footer/small-polygon.svg') }}"
        class="absolute right-[50%] top-[-4%] hidden md:block" alt="مضلع سداسي صغير">
    <img src="{{ asset('assets/website/images/footer/white-points.svg') }}" class="absolute right-[91%] hidden md:block"
        alt="نقاط بيضاء صغيرة">

    <div class="flex max-md:flex-col justify-around py-20 items-center flex-row sm:gap-12 max-sm:gap-12"
        id="footer-edit">
        <div class="flex flex-col items-center gap-y-4 mb-6 md:mb-0">
            <p class="text-3xl text-center text-gray-200 py-4">روابط مواقعنا على شبكات التواصل الاجتماعي</p>
            <ul class="flex gap-12">
                <li>
                    <a href="https://www.youtube.com/@Arab-Sign/featured" class="">
                        <i class="fab fa-youtube text-gray-200 fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=61551615041165" class="">
                        <i class="fab fa-facebook-f text-gray-200 fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/%D9%85%D9%86%D8%B5%D8%A9-%D8%A5%D8%B4%D8%A7%D8%B1%D8%A9-%D8%B9%D8%B1%D8%A8%D9%8A/mycompany/?viewAsMember=true"
                        class="">
                        <i class="fab fa-linkedin-in text-gray-200 fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/arab_sign_plarform?igshid=NzZlODBkYWE4Ng==" class="">
                        <i class="fab fa-instagram text-gray-200 fa-2x" aria-hidden="true"></i>
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
                <p class="text-lg -tracking-tight leading-9 font-normal text-white">العالم بين يديك</p>
                <img src="{{ asset('assets/website/images/footer/leftComma.svg') }}" alt="فاصلة يسارية"
                    class="mt-3 w-4 h-6">
            </div>
        </div>
    </div>

    <div class="flex flex-row items-center justify-center gap-x-1 pb-4">
        <span><img src="{{ asset('assets/website/images/footer/copyright.svg') }}" alt="رمز حقوق الملكية"></span>
        <p class="font-normal text-xl text-white leading-8 ">جميع حقوق النشر محفوظة - منصة إشارة عربي
            {{ \Carbon\Carbon::now()->format('Y') }}</p>
    </div>
</footer>
