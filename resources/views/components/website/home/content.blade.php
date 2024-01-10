<section class="flex flex-col gap-14 mt-32 relative">
    <x-website.home.section-break :title="'المحتوى المرئي'" />
    <div class="flex flex-col gap-12">
        <div class="self-center">
            <h2 class="text-center text-2xl leading-9">نقدم فيديوهات متنوعة بلغة الاشارة</h2>
        </div>
        <div class="flex flex-col lg:flex-row lg:w-[90%] w-[80%] lg:gap-x-8 gap-y-10 lg:gap-y-0 mx-auto">
            <div class="basis-1/2 my-auto">
                <x-website.home.content.big-card />
            </div>
            <div class="flex flex-col gap-y-10 lg:gap-y-[14px] basis-1/2">
                @for ($i = 0; $i < 3; $i++)
                    <x-website.home.content.small-card />
                @endfor
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
    </div>
</section>
