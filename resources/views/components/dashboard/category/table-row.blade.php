<tr>
    <td class="px-6 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <div class="flex px-2">
            <p class="mb-0 text-sm leading-normal">{{ $category->name }}</p>
        </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <p class="mb-0 text-sm font-semibold leading-normal">{{ $category->getCategoryUsageCount() }}</p>
    </td>
    <td class="p-2 align-middle border-b whitespace-nowrap text-center">
        <div class="dropdown inline-block">
            <button data-dropdown-button="{{ $category->id }}" onclick="toggleDropdown('dropdownMenu{{ $category->id }}')"
                class="p-1 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400">
                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
            </button>
            <div id="dropdownMenu{{ $category->id }}"
                class="dropdownMenu hidden absolute w-48 right-[7%] z-40 bg-red border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg overflow-y-auto max-h-48">
                <button
                    onclick="editCategory('{{ route('dashboard.category.update', $category) }}' , '{{ $category->name }}')"
                    class="block px-4 py-2 text-sm bg-white text-gray-700 hover:bg-orange-100 w-full text-left">
                    Edit
                </button>
                <form hidden id="editCategory">
                    @csrf
                    @method('PATCH')
                </form>
                <button onclick="deleteCategory('{{ route('dashboard.category.destroy', $category) }}')"
                    class="block px-4 py-2 text-sm bg-white text-red-700 hover:bg-red-100 w-full text-left">
                    Delete
                </button>
                <form hidden id="deleteCategory">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </td>
</tr>
