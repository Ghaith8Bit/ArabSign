<div class="mb-4">
    <label for="resource_keyword" class="block text-sm font-medium text-gray-600">Resource</label>
    <input type="text" name="resource_keyword" id="resource_keyword"
        value="{{ Request::get('resource_keyword') ?? $content->resource->keyword }}"
        class="mt-1 p-2 w-full border bg-white border-gray-400 rounded-md" required readonly
        placeholder="Click to select a resource form Library"
        onclick="redirectToLibrary('{{ route('dashboard.content.edit', $content->id) }}','{{ route('dashboard.library.index') }}')">
    <input type="hidden" name="resource_id" id="resource_id"
        value="{{ Request::get('resource_id') ?? $content->resource->id }}">
</div>
