<div id="filterModal" class="relative z-40" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-center justify-center text-center sm:items-center pl-9 pr-5 ">
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <form id="filterForm" action="{{ route('website.content.index') }}" method="GET"
                            onsubmit="changeCategoryParameter(document.getElementById('category').value);return false">
                            <div class="modal-content bg-white p-4 shadow-md rounded-md">
                                <div class="flex mx-4 w-[95%] flex-col gap-3">
                                    <x-website.content.modal.input.category :categories="$categories" />
                                    <input type="hidden" name="query" id="formQuery">
                                </div>
                                <x-website.content.modal.input.buttons />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
