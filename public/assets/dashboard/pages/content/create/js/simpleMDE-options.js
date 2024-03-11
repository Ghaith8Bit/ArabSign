var simplemde = new SimpleMDE({
    element: document.getElementById("body"),
    spellChecker: false,
    autosave: {
        enabled: true,
        unique_id: "body",
        delay: 5000,
    },
    toolbar: []
});
