function showFileDropzone(event) {
    event.preventDefault();
    document.getElementById('dropzone').style.display = 'block';
    document.getElementById('externalLinkInput').style.display = 'none';
    document.getElementById('fileDropzoneBtn').classList.add('!bg-blue-500', 'text-white');
    document.getElementById('fileDropzoneBtn').classList.remove('!bg-gray-300', 'text-gray-800');
    document.getElementById('externalLinkInputBtn').classList.add('!bg-gray-300', 'text-gray-800');
    document.getElementById('externalLinkInputBtn').classList.remove('!bg-blue-500', 'text-white');
}

function showExternalLinkInput(event) {
    event.preventDefault();
    document.getElementById('dropzone').style.display = 'none';
    document.getElementById('externalLinkInput').style.display = 'block';
    document.getElementById('fileDropzoneBtn').classList.remove('!bg-blue-500', 'text-white');
    document.getElementById('fileDropzoneBtn').classList.add('!bg-gray-300', 'text-gray-800');
    document.getElementById('externalLinkInputBtn').classList.remove('!bg-gray-300', 'text-gray-800');
    document.getElementById('externalLinkInputBtn').classList.add('!bg-blue-500', 'text-white');
}
