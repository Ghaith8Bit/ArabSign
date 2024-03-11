<table class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500 mt-3">
    <thead class="align-bottom">
        <tr>
            <th
                class="text-sm px-8 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                Title</th>
            <th
                class="px-6 text-sm py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                Thumbnail</th>
            <th
                class="text-sm px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                Views</th>
            <th
                class="py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap">
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($contents as $content)
            <x-dashboard.content.index.table-row :content="$content" />
        @empty
            <tr>
                <td colspan="4" class="text-center pt-4 opacity-75">
                    <p class="text-bold tracking-wide text-sm">No content available</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
