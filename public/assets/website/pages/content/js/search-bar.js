document.getElementById('searchField').addEventListener('keypress', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault();

        var enteredValue = this.value.trim();
        changeQueryParameter(enteredValue);
    }
});
