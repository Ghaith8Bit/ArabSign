document.addEventListener("DOMContentLoaded", function () {
    var elements = document.getElementsByClassName('smallCardText');

    // Check if elements with the given class are found
    if (elements.length > 0) {
        // Store the original content for each element
        var originalContents = Array.from(elements).map(function (element) {
            return element.textContent;
        });

        // Function to update text based on screen size
        function updateText() {
            for (var i = 0; i < elements.length; i++) {
                var originalContent = originalContents[i];
                var screenWidth = window.innerWidth;

                if (screenWidth < 500) {
                    elements[i].textContent = truncateText(originalContent, 60);
                } else if (screenWidth < 640) {
                    elements[i].textContent = truncateText(originalContent, 70);
                } else if (screenWidth < 768) {
                    elements[i].textContent = truncateText(originalContent, 90);
                } else if (screenWidth < 1024) {
                    elements[i].textContent = truncateText(originalContent, 180);
                } else if (screenWidth < 1280) {
                    elements[i].textContent = truncateText(originalContent, 150);
                } else {
                    elements[i].textContent = truncateText(originalContent, 180);
                }
            }
        }

        // Initial update
        updateText();

        // Update on window resize
        window.addEventListener("resize", updateText);
    }

    // Function to truncate text at the nearest space before the character limit
    function truncateText(text, limit, skip = false) {
        if (!skip) {
            if (text.length <= limit) {
                return text;
            }

            var lastSpaceIndex = text.lastIndexOf(' ', limit);
            return text.substring(0, lastSpaceIndex) + '...';
        }
        return '';
    }
});
