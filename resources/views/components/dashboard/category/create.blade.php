<button onclick="addCategory('{{ route('dashboard.category.store') }}')"
    class="bg-primaryColor text-white px-2 py-0.5 rounded-full cursor-pointer">
    <i class="fas fa-plus transform transition-transform hover:rotate-180"></i>
</button>
<form hidden id="addCategory">
    @csrf
</form>
