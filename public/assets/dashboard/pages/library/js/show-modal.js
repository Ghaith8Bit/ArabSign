function openShowModal(resource) {
    document.querySelector('.showModal').classList.remove('hidden');
    document.querySelector('.showModal').classList.add('block');

    var typeContainer = document.querySelector(`#typeContainer>div[media-type=${resource.type}]`);
    typeContainer.classList.remove('hidden');
    typeContainer.classList.add("flex", "justify-center", "items-center");

    switch (resource.type) {
        case "Image":
        case "GIF":
            var imgElement = document.createElement('img');
            imgElement.src = resource.path;
            imgElement.classList.add('rounded-lg', 'w-3/4');
            typeContainer.appendChild(imgElement);
            break;

        case "Video":
            var videoElement = document.createElement('video');
            videoElement.src = resource.path;
            videoElement.controls = true;
            videoElement.classList.add('rounded-lg', 'w-3/4');
            typeContainer.appendChild(videoElement);
            break;

        case "Facebook":
            var iframeElement = document.createElement('iframe');
            iframeElement.src = "https://www.facebook.com/plugins/video.php?href=" + encodeURIComponent(resource.path) + "&show_text=0&width=560";
            iframeElement.setAttribute('width', '80%');
            iframeElement.setAttribute('height', '98%');
            iframeElement.setAttribute('allowfullscreen', 'true');
            iframeElement.setAttribute('allow', 'autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share');
            iframeElement.setAttribute('frameborder', '0');
            iframeElement.setAttribute('scrolling', 'no');
            iframeElement.setAttribute('allowtransparency', 'true');
            typeContainer.appendChild(iframeElement);
            break;



        case "Instagram":
            var iframeElement = document.createElement('iframe');
            var videoId = resource.path.split("/")[4];
            iframeElement.src = "https://www.instagram.com/reel/" + videoId + "/embed/";
            iframeElement.setAttribute('width', '50%');
            iframeElement.setAttribute('height', '98%');
            iframeElement.setAttribute('allowfullscreen', 'true');
            iframeElement.setAttribute('allow', 'autoplay; encrypted-media; picture-in-picture; web-share');
            iframeElement.setAttribute('frameborder', '0');
            iframeElement.setAttribute('scrolling', 'no');
            iframeElement.setAttribute('allowtransparency', 'true');
            typeContainer.appendChild(iframeElement);
            break;


        //TODO: youtube + tiktok + x
        // case "YouTube":
        // case "TikTok":
        // case "X":
        default:
            break;
    }

    window.addEventListener('keydown', showKeydownFunction);
}

function closeShowModal() {
    window.removeEventListener('keydown', showKeydownFunction);

    var allTypeContainer = document.querySelectorAll(`#typeContainer>.flex`);

    document.querySelector('.showModal').classList.add('hidden');
    document.querySelector('.showModal').classList.remove("flex", "justify-center", "items-center");

    allTypeContainer.forEach(element => {
        element.innerHTML = "";
        element.classList.remove('block');
        element.classList.add('hidden');
    });

}

function showKeydownFunction(e) {
    if (e.key == "Escape") {
        closeShowModal();
    }
}
