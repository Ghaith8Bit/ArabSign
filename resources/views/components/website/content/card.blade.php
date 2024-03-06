<div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 p-4 max-sm:px-16">
    <a href="#" class="c-card block bg-white shadow-md hover:shadow-xl rounded-xl overflow-hidden border">
        <div class="relative pb-48 overflow-hidden">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ $content->thumbnail }}"
                alt="{{ $content->title }}">
        </div>
        <div class="p-4">
            <span
                class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">{{ $content->category->name }}
            </span>
            <h2 class="mt-2 mb-2  font-bold">{{ $content->title }}</h2>
            <p class="text-sm">{{ \Illuminate\Support\Str::limit($content->body, 150) }}</p>
        </div>
        <div class="p-4  text-sm text-gray-700 flex  gap-y-4 justify-evenly">
            <span class="flex items-baseline mb-1">
                <i class="fa-regular fa-calendar-days ml-2 "></i>
                {{ Carbon\Carbon::parse($content->published_at)->diffForHumans() }}
            </span>
            <span class="flex  items-baseline mb-1">
                <i class="fa-solid fa-eye ml-2 "></i>{{ $content->views }}
            </span>
        </div>

    </a>
</div>
