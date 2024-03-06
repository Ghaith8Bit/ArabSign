<table class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
    <thead class="align-bottom">
        <tr>
            <th
                class="px-8 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                Name</th>
            <th
                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                Count</th>
            <th
                class="py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap">
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
            <x-dashboard.category.table-row :category="$category" />
        @empty
            <tr>
                <td colspan="3" class="text-center pt-4 opacity-75">
                    <h6>No categories available</h6>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
