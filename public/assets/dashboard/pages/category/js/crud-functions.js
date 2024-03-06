function addCategory(storeRoute) {
    var categoryName = prompt('Enter the name of the new category:');

    if (categoryName !== null) {
        var form = document.querySelector('#addCategory');
        form.method = 'POST';
        form.action = storeRoute;
        form.style.display = 'none';

        var categoryNameInput = document.createElement('input');
        categoryNameInput.type = 'hidden';
        categoryNameInput.name = 'name';
        categoryNameInput.value = categoryName;
        form.appendChild(categoryNameInput);

        form.submit();
    }
}


function editCategory(updateRoute, oldName) {
    var newCategoryName = prompt('Edit category name:', oldName);

    if (newCategoryName !== null) {
        var form = document.querySelector('#editCategory');
        form.method = 'POST';
        form.action = updateRoute;
        form.style.display = 'none';

        var categoryNameInput = document.createElement('input');
        categoryNameInput.type = 'hidden';
        categoryNameInput.name = 'name';
        categoryNameInput.value = newCategoryName;
        form.appendChild(categoryNameInput);

        form.submit();
    }
}

function deleteCategory(desrtoyRoute) {
    var isConfirmed = confirm('Are you sure you want to delete this category?');

    if (isConfirmed) {
        var form = document.querySelector('#deleteCategory');
        form.method = 'POST';
        form.action = desrtoyRoute;
        form.style.display = 'none';

        form.submit();
    }
}
