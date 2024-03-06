<div id="addModal" class="relative z-40" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center  sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <form action="{{ route('dashboard.library.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-content bg-white p-4 shadow-md rounded-md">
                            @csrf
                            <div class="py-6">
                                <label for="keyword"
                                    class="block text-sm font-medium leading-6 text-gray-900">Keyword</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <input type="text" name="keyword" id="keyword" value="{{ old('keyword') }}"
                                        class="block w-full rounded-md  px-[6.5rem] text-left text-gray-900 ring-1  py-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6 ">
                                    <div class="absolute inset-y-0 left-0 flex items-center">
                                        <label for="pre-keyword" class="sr-only"></label>
                                        <select id="pre-keyword" name="pre-keyword"
                                            class="h-full rounded-md border-0 bg-transparent p-2  text-gray-500 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm">
                                            <option value="Content">Content.</option>
                                            <option value="Learn">Learn.</option>
                                            <option value="Blog">Blog.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <label for="type" class="block mb-2">Media Type:</label>
                            <select id="type" name="type" class="w-full p-2 border rounded mb-4">
                                @foreach (\App\Enums\LibraryTypeEnum::toArray() as $type)
                                    <option value="{{ $type->name }}"
                                        @if (old('type') == $type->name) {{ 'selected' }} @endif>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div class="max-w-md mx-auto">
                                <div class="flex justify-center mb-4">
                                    <button type="button" id="fileDropzoneBtn" onclick="showFileDropzone(event);"
                                        class="focus:outline-none px-4 py-2 rounded-tl-md rounded-bl-md !bg-blue-500 text-white">Use
                                        Local File</button>

                                    <button type="button" id="externalLinkInputBtn"
                                        onclick="showExternalLinkInput(event)"
                                        class="focus:outline-none px-4 py-2 rounded-tr-md rounded-br-md !bg-gray-300 text-gray-800">Use
                                        External Link</button>
                                </div>
                                <div id="dropzone"
                                    class="bg-gray-100 py-4 text-center rounded-lg border-dashed border-2 border-gray-300 hover:border-black transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md">
                                    <label for="fileInput" class="cursor-pointer flex flex-col items-center space-y-2">
                                        <svg class="w-16 h-16 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-gray-600">Click and choose your files here</span>
                                        <div class="mt-6 text-center" id="fileList"></div>
                                    </label>
                                    <input type="file" name="file" id="fileInput" class="hidden">
                                </div>



                                <!-- External Link Input -->
                                <div id="externalLinkInput" class="hidden mt-6 text-center">
                                    <label for="externalLink" class="block mb-2">External Link:</label>
                                    <input type="text" id="externalLink" placeholder="Enter external link"
                                        class="w-full p-2 border rounded mb-4" name="link"
                                        value="{{ old('link') }}">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button
                                class="inline-flex w-full justify-center rounded-md  px-3 py-2 text-sm font-semibold text-black shadow-sm  sm:ml-3 sm:w-auto !bg-green-500 hover:!bg-green-700"
                                type="submit">Create</button>

                            <button type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto cancel-button-add">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
