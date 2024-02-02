document.addEventListener("DOMContentLoaded", function () {

    var cancelButton = document.querySelector('.cancel-button-add');
    var addModal = document.getElementById('addModal')
    var addIcon = document.querySelector('.add')

    addIcon.addEventListener("click", function () {
        addModal.style.display = "block";
        window.addEventListener('keydown', addKeydownFunction);
    });

    cancelButton.addEventListener("click", function () {
        addModal.style.display = "none";
    });

    function addKeydownFunction(e) {
        if (e.key == "Escape") {
            window.removeEventListener('keydown', addKeydownFunction);
            cancelButton.click();
        }
    }
});


