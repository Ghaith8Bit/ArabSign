<form id="createContentForm" method="POST" action="{{ route('dashboard.content.store') }}" enctype="multipart/form-data"
    class="max-w-full mx-8">
    @csrf
    <x-dashboard.content.create.input.resource />
    <hr id="separator" class="h-px my-8 bg-gray-800" style="display: none" />
    <x-dashboard.content.create.input.title />
    <x-dashboard.content.create.input.body />
    <x-dashboard.content.create.input.category :categories="$categories" />
    <x-dashboard.content.create.input.thumbnail />
    <x-dashboard.content.create.input.keyword />

    <button type="submit"
        class="!bg-primaryColor text-white font-bold my-3 py-2 px-4 rounded-md transition-all duration-300 transform hover:scale-105">Create
        Content</button>
</form>
