<div class="mb-4">
    <label for="keyword" class="block text-sm font-medium text-gray-600">Keyword</label>
    <div id="keywordInputContainer" class="flex flex-wrap items-center">
        <input type="text" id="keyword" class="mt-1 p-2 w-full border bg-white border-gray-400 rounded-md"
            placeholder="Enter keywords and press Enter">
    </div>
    <!-- Hidden input to store the array of keywords -->
    <input type="hidden" name="keywordsArray" id="keywordsArray" value="{{ $keywords }}">
    <!-- Error message for validation -->
    <p id="validationError" class="text-red-500 mt-2"></p>
</div>
