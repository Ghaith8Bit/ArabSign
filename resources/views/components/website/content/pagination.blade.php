@if ($paginator instanceof \Illuminate\Pagination\LengthAwarePaginator && $paginator->lastPage() > 1)
    <div class="flex items-center gap-4 justify-around mt-6">
        <button
            class="flex items-center gap-2 px-6 py-3 bg-gray-900 font-sans text-xs font-bold text-center text-white uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/90 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            @if ($paginator->currentPage() > 1) onclick="changePageParameter({{ $paginator->currentPage() - 1 }})"
            @else disabled @endif>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                aria-hidden="true" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
            </svg>
            السابق
        </button>

        <div class="flex items-center gap-2">
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg {{ $paginator->currentPage() == $i ? 'bg-gray-900 text-white' : 'text-gray-900' }} text-center align-middle font-sans text-xs font-medium uppercase transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button" onclick="changePageParameter({{ $i }})">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        {{ $i }}
                    </span>
                </button>
            @endfor
        </div>

        <button
            class="flex items-center gap-2 px-6 py-3 bg-gray-900 font-sans text-xs font-bold text-center text-white uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/90 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button"
            @if ($paginator->hasMorePages()) onclick="changePageParameter({{ $paginator->currentPage() + 1 }})"
            @else disabled @endif>
            التالي
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
            </svg>
        </button>
    </div>
@endif
