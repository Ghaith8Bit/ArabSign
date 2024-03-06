const fileInput = document.getElementById('fileInput');
const fileList = document.getElementById('fileList');


fileInput.addEventListener('change', (e) => {
    dropzone.classList.remove('border-2', 'hover:scale-105', 'hover:shadow-md');
    const file = e.target.files[0];
    handleFiles(file);
});

function handleFiles(file) {
    fileList.innerHTML = '';

    const listItem = document.createElement('div');
    listItem.textContent = `${file.name} (${formatBytes(file.size)})`;
    fileList.appendChild(listItem);
}


function formatBytes(bytes) {
    if (bytes === 0) return '0 Bytes';

    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));

    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}
