document.addEventListener('DOMContentLoaded', function () {
    const keywordInputContainer = document.getElementById('keywordInputContainer');
    const keywordInput = document.getElementById('keyword');
    const keywordsArrayInput = document.getElementById('keywordsArray');
    const validationError = document.getElementById('validationError');

    // Initialize addedKeywords with old values from the hidden input
    const addedKeywords = keywordsArrayInput.value ? JSON.parse(keywordsArrayInput.value) : [];


    // Function to create span and button elements
    function createSpanAndButton(keyword) {
        const keywordSpan = document.createElement('span');
        keywordSpan.className = 'bg-gray-200 px-2 py-1 rounded-md mr-2 mt-2';
        keywordSpan.textContent = keyword;

        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.className = 'text-red-600 ml-1';
        removeButton.textContent = 'x';

        removeButton.addEventListener('click', function () {
            const index = addedKeywords.indexOf(keyword);
            if (index !== -1) {
                addedKeywords.splice(index, 1);
            }
            keywordInputContainer.removeChild(keywordSpan);
            updateKeywordsArrayInput();
        });

        keywordSpan.appendChild(removeButton);

        return keywordSpan;
    }

    // Display old values
    addedKeywords.forEach(function (keyword) {
        const keywordSpan = createSpanAndButton(keyword);
        keywordInputContainer.appendChild(keywordSpan);
    });

    // Event listener for Enter key
    keywordInput.addEventListener('keydown', function (event) {
        console.log(event.key);
        if (event.key === 'Enter') {
            event.preventDefault();

            // Basic client-side validation
            const keyword = keywordInput.value.trim();
            if (keyword === '') {
                validationError.textContent = 'Please enter a keyword.';
                return;
            } else if (addedKeywords.includes(keyword)) {
                validationError.textContent = 'Duplicate keywords are not allowed.';
                return;
            }

            // Validation passed
            validationError.textContent = '';

            // Add the keyword to the list
            addedKeywords.push(keyword);

            // Create and append the span and button elements
            const keywordSpan = createSpanAndButton(keyword);
            keywordInputContainer.appendChild(keywordSpan);

            // Update the hidden input value
            updateKeywordsArrayInput();

            // Clear the input field
            keywordInput.value = '';
        }
    });

    function updateKeywordsArrayInput() {
        // Update the hidden input value with the current array of keywords
        keywordsArrayInput.value = JSON.stringify(addedKeywords);
    }
});
