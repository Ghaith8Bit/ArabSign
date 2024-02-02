<span
    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all right-[85%]">
    <i class="fas fa-search"></i>
</span>

<input id="searchField" type="text" name="query" value="{{ $query }}"
    class="pl-8.75 text-sm r w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-secondaryColor focus:outline-none focus:transition-shadow"
    placeholder="اكتب هنا..."
    onkeydown="if (event.key === 'Enter') { document.getElementById('searchQuery').value = this.value; if (this.value !== '') { document.getElementById('searchForm').submit(); return false; } else { location.href = '{{ url()->current() }}' } }" />
<form id="searchForm" method="GET" action="{{ url()->current() }}">
    <input type="hidden" name="query" id="searchQuery">
</form>