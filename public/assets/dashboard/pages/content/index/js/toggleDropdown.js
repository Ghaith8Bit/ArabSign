function toggleDropdown(id) {
    const dropdowns = document.querySelectorAll('.dropdownMenu');
    const toggled = document.getElementById(id);

    // Close other open dropdowns
    dropdowns.forEach(dropdown => {
        if (dropdown.id !== id && !dropdown.classList.contains('hidden')) {
            dropdown.classList.add('hidden');
        }
    });

    // Toggle the selected dropdown
    toggled.classList.toggle('hidden');
}
