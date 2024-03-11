document.addEventListener("DOMContentLoaded", function () {

    var cancelButton = document.querySelector('.cancel-button-add');
    var filterModal = document.getElementById('filterModal')
    var filterIcon = document.querySelector('.filter')

    filterIcon.addEventListener("click", function () {
        filterModal.style.display = "block";
        window.addEventListener('keydown', addKeydownFunction);
    });

    cancelButton.addEventListener("click", function () {
        filterModal.style.display = "none";
    });

    function addKeydownFunction(e) {
        if (e.key == "Escape") {
            window.removeEventListener('keydown', addKeydownFunction);
            cancelButton.click();
        }
    }
});
