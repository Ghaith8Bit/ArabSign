<form id="editContentForm" method="POST" action="{{ route('dashboard.content.update', $content->id) }}"
    enctype="multipart/form-data" class="max-w-full mx-8">
    @csrf
    @method('PATCH')
    <x-dashboard.content.edit.input.resource :content="$content" />
    <hr id="separator" class="h-px my-8 bg-gray-800" style="display: none" />
    <x-dashboard.content.edit.input.title :title="$content->title" />
    <x-dashboard.content.edit.input.body :body="$content->body" />
    <x-dashboard.content.edit.input.category :selected="$content->category_id" :categories="$categories" />
    <x-dashboard.content.edit.input.thumbnail />
    <x-dashboard.content.edit.input.keyword :keywords="$keywords" />

    <button type="submit"
        class="!bg-primaryColor text-white font-bold my-3 py-2 px-4 rounded-md transition-all duration-300 transform hover:scale-105">Edit
        Content</button>
</form>
