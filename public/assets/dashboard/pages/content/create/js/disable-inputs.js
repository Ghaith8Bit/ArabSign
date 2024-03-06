var resource_keyword = document.querySelector('#resource_keyword');
var inputs = document.querySelectorAll('#title , #body , #category_id , #thumbnail , #keyword');
if (!resource_keyword.value.trim()) {
    inputs.forEach(input => {
        input.disabled = true;
        input.classList.add('!border-gray-100', '!bg-gray-100', '!cursor-not-allowed');
    });
}
