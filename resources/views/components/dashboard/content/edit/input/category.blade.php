<div class="mb-4">
    <label for="category_id" class="block text-sm font-medium">Category</label>
    <select name="category_id" id="category_id" class="mt-1 p-2 w-full border bg-white border-gray-400 rounded-md">
        <option value="" selected disabled>Select a category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $selected == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
