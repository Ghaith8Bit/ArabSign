<div class="flex items-center">
    <div class="flex">
        <div class="relative">
            <ul class="flex flex-wrap gap-4" id="categoryList">
                @foreach ($categories as $category)
                    @php
                        $categoryId = $category->id;
                        $existingCategories = json_decode(Request::get('category'), true);
                        $existingCategories = is_array($existingCategories) ? $existingCategories : [];
                        $exist = in_array($categoryId, $existingCategories);
                    @endphp
                    <li>
                        <input type="checkbox" class="hidden category-checkbox" id="category-{{ $category->id }}"
                            value="{{ $category->id }}" @if ($exist) checked @endif>
                        <label for="category-{{ $category->id }}"
                            class="block px-6 py-3 text-sm {{ $exist ? '!bg-blue-500 !text-white' : 'hover:bg-gray-400' }} bg-gray-300  focus:bg-gray-400 transition duration-300 ease-in-out rounded-xl cursor-pointer">
                            {{ $category->name }}
                        </label>
                    </li>
                @endforeach
                <input type="hidden" id="category" name="category" value="{{ Request::get('category') }}">
            </ul>
        </div>
    </div>
</div>
