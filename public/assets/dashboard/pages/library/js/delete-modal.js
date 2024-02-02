function openDeleteModal(id, route) {
    document.querySelector('.deleteModal').classList.remove('hidden');
    document.querySelector('.deleteModal').classList.add('block');

    document.querySelector('#deleteResourceId').value = id;
    document.querySelector('#deleteResourceForm').action = route;

    window.addEventListener('keydown', deleteKeydownFunction);
}

function closeDeleteModal() {
    window.removeEventListener('keydown', deleteKeydownFunction);

    document.querySelector('.deleteModal').classList.add('hidden');
    document.querySelector('.deleteModal').classList.remove('block');
}

function deleteKeydownFunction(e) {
    if (e.key == "Escape") {
        closeDeleteModal();
    }
}
