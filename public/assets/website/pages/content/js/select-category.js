document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.category-checkbox');
    const categoryList = document.getElementById('categoryList');
    const categoryInput = document.getElementById('category');

    const selectedCategories = categoryInput.value ? JSON.parse(categoryInput.value) : [];

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            const label = this.nextElementSibling;
            const categoryId = this.value;

            if (this.checked) {
                label.classList.add('!bg-blue-500', '!text-white');
                label.classList.remove('hover:bg-gray-400');
                selectedCategories.push(categoryId);
            } else {
                label.classList.remove('!bg-blue-500', '!text-white');
                label.classList.add('hover:bg-gray-400');
                const index = selectedCategories.indexOf(categoryId);
                if (index !== -1) {
                    selectedCategories.splice(index, 1);
                }
            }
            categoryInput.value = JSON.stringify(selectedCategories);
        });
    });
});
