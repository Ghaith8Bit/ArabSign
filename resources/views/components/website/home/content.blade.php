<section class="flex flex-col gap-14 mt-32 relative">
    <x-website.home.section-break :title="'المحتوى المرئي'" />
    <div class="flex flex-col gap-12 container mx-auto w-[80%] lg:w-[90%] xl:w-full">
        <div class="self-center">
            <h2 class="text-center text-2xl leading-9">نقدم فيديوهات متنوعة بلغة الاشارة</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($contents as $content)
                <div>
                    <x-website.home.content.big-card :content="$content" />
                </div>
            @endforeach
        </div>
        <div class="self-center">
            <a href="{{ route('website.content.index') }}">
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
