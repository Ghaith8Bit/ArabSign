<tr>
    <td class="px-6 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <div class="flex px-2">
            <p class="mb-0 text-sm leading-normal">{{ $content->title }}</p>
        </div>
    </td>
    <td class="px-6 py-12 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent bg-contain bg-no-repeat bg-left"
        style="background-image: url('{{ $content->thumbnail }}');">
    </td>
    <td class="p-2 px-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <p class="mb-0 text-sm font-semibold leading-normal">{{ $content->views }}</p>
    </td>
    <td class="p-2 align-middle border-b whitespace-nowrap text-center">
        <div class="dropdown inline-block">
            <button onclick="toggleDropdown('dropdownMenu{{ $content->id }}')"
                class="p-1 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400">
                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
            </button>
            <div id="dropdownMenu{{ $content->id }}"
                class="dropdownMenu hidden absolute right-[20px] w-48 bg-white border rounded shadow-lg z-40">
                <button class="block px-4 py-2 text-sm bg-white text-gray-700 hover:bg-orange-100 w-full text-left"
                    onclick="location.href='{{ route('dashboard.content.edit', $content->id) }}'">
                    Edit
                </button>
                <button class="block px-4 py-2 text-sm bg-white text-red-700 hover:bg-red-100 w-full text-left"
                    onclick="openDeleteModal( '{{ route('dashboard.content.destroy', $content->id) }}' )">
                    Delete
                </button>
                <form hidden id="deleteContent">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </td>
</tr>
