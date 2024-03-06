function openShowModal(resource) {
    document.querySelector(".showModal").classList.remove("hidden");
    document.querySelector(".showModal").classList.add("block");

    var typeContainer = document.querySelector(
        `#typeContainer>div[media-type=${resource.type}]`
    );
    typeContainer.classList.remove("hidden");
    typeContainer.classList.add("flex", "justify-center", "items-center");

    switch (resource.type) {
        case "Image":
        case "GIF":
            var background = `url('${resource.path}')`;
            typeContainer.style.backgroundImage = background;
            typeContainer.style.backgroundRepeat = 'no-repeat';
            typeContainer.style.backgroundPosition = 'center';
            typeContainer.style.backgroundSize = 'contain';

            break;

        case "Video":
            var videoElement = document.createElement("video");
            videoElement.src = resource.path;
            videoElement.autoplay = true;
            videoElement.loop = true;
            videoElement.muted = false;

            videoElement.style.width = "100%";
            videoElement.style.height = "100%";
            videoElement.style.objectFit = "contain";

            var controlsContainer = document.createElement("div");
            controlsContainer.style.position = "absolute";
            controlsContainer.style.top = "10px";
            controlsContainer.style.left = "10px";
            controlsContainer.style.display = "flex";
            controlsContainer.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
            controlsContainer.style.padding = "8px";
            controlsContainer.style.borderRadius = "8px";
            controlsContainer.style.transition = "background-color 0.3s";
            controlsContainer.style.zIndex = "1";
            controlsContainer.style.gap = "14px";

            // Play/Pause button
            var playButton = document.createElement("button");
            var playPauseIcon = document.createElement("i");
            playPauseIcon.classList.add("fas", "fa-stop", "text-primaryColor");
            playButton.onclick = function () {
                videoElement.paused
                if (videoElement.paused) {
                    playPauseIcon.classList.remove('fa-play');
                    playPauseIcon.classList.add('fa-stop');
                    videoElement.play();
                } else {
                    playPauseIcon.classList.remove('fa-stop');
                    playPauseIcon.classList.add('fa-play');
                    videoElement.pause();
                }
            };


            controlsContainer.appendChild(playButton);
            playButton.appendChild(playPauseIcon);



            // Mute button
            var muteButton = document.createElement("button");
            var muteIcon = document.createElement("i");
            muteIcon.classList.add("fas", "fa-volume-up", "text-primaryColor");
            muteButton.onclick = function () {
                videoElement.muted = !videoElement.muted;
                muteIcon.classList.toggle("fa-volume-up", !videoElement.muted);
                muteIcon.classList.toggle("fa-volume-off", videoElement.muted);
            };

            controlsContainer.appendChild(muteButton);
            muteButton.appendChild(muteIcon);


            // Controls button
            var controlsButton = document.createElement("button");
            var controlsIcon = document.createElement("i");
            controlsIcon.classList.add("fas", "fa-cogs", "text-primaryColor");
            controlsButton.onclick = function () {
                videoElement.controls = !videoElement.controls;
            };

            controlsContainer.appendChild(controlsButton);
            controlsButton.appendChild(controlsIcon);


            typeContainer.appendChild(videoElement);
            typeContainer.appendChild(controlsContainer);

            break;


        case "Facebook":
            var iframeElement = document.createElement("iframe");
            iframeElement.src =
                "https://www.facebook.com/plugins/post.php?href=" +
                encodeURIComponent(resource.path) +
                "&show_text=0&width=560";
            iframeElement.classList.add(
                "rounded-lg",
                "w-3/4",
                "justify-center",

            );

            iframeElement.setAttribute("height", "98%");

            iframeElement.setAttribute("allowfullscreen", "true");

            iframeElement.setAttribute(
                "allow",
                "autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            );
            iframeElement.setAttribute("frameborder", "0");
            iframeElement.setAttribute("scrolling", "no");
            iframeElement.setAttribute("allowtransparency", "true");
            typeContainer.appendChild(iframeElement);
            break;

        case "Instagram":
            var iframeElement = document.createElement("iframe");
            var videoId = resource.path.split("/")[4];
            iframeElement.src =
                "https://www.instagram.com/reel/" + videoId + "/embed/";
            iframeElement.setAttribute("height", "100%");
            iframeElement.setAttribute("allowfullscreen", "true");
            iframeElement.setAttribute(
                "allow",
                "autoplay; encrypted-media; picture-in-picture; web-share"
            );
            iframeElement.setAttribute("frameborder", "0");
            iframeElement.setAttribute("scrolling", "no");
            iframeElement.setAttribute("allowtransparency", "true");
            typeContainer.appendChild(iframeElement);
            break;

        case "YouTube":
            var youtubeIframe = document.createElement("iframe");
            var videoId = null;
            var match = resource.path.match(
                /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/|youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/
            );
            if (match) {
                youtubeIframe.src = "https://www.youtube.com/embed/" + match[1];
                youtubeIframe.setAttribute("allowfullscreen", "true");
                youtubeIframe.setAttribute("frameborder", "0");

                // Detect if it's a YouTube short
                var isShort = resource.path.includes("/shorts/");

                // Set the parent container styles
                var youtubeContainer = document.createElement("div");
                youtubeContainer.classList.add("youtube-video-container");
                youtubeContainer.appendChild(youtubeIframe);

                // Apply CSS styles based on video type
                youtubeContainer.style.position = "relative";
                youtubeContainer.style.overflow = "hidden";


                if (isShort) {
                    youtubeContainer.style.width = "320px";
                    youtubeContainer.style.height = "80vh";
                } else {
                    youtubeContainer.style.width = "90%";
                    youtubeContainer.style.paddingTop = "50%";
                }

                // Set iframe styles
                youtubeIframe.style.position = "absolute";
                youtubeIframe.style.top = "0";
                youtubeIframe.style.left = "0";
                youtubeIframe.style.width = "100%";
                youtubeIframe.style.height = "100%";

                typeContainer.appendChild(youtubeContainer);
            }
            break;



        case "TikTok":
            var tiktokIframe = document.createElement("iframe");
            var videoId = resource.path.split("/")[5];
            var embedUrl = "https://www.tiktok.com/embed/v2/" + videoId;
            tiktokIframe.src = embedUrl;
            tiktokIframe.setAttribute("height", "98%");
            tiktokIframe.setAttribute("allowfullscreen", "true");
            tiktokIframe.setAttribute(
                "allow",
                "autoplay; encrypted-media; picture-in-picture; web-share"
            );
            tiktokIframe.setAttribute("frameborder", "0");
            tiktokIframe.setAttribute("scrolling", "no");
            tiktokIframe.setAttribute("allowtransparency", "true");
            typeContainer.appendChild(tiktokIframe);
            break;
        // case "X":
        //     var match = resource.path.match(/\/status\/(\d+)/);
        //     if (match) {
        //         var tweetId = match[1];
        //         var twitframeUrl = `https://twitframe.com/show?url=https%3A%2F%2Ftwitter.com%2FWhotfismick%2Fstatus%2F${tweetId}`;
        //         var twitterIframe = document.createElement("iframe");
        //         twitterIframe.src = twitframeUrl;
        //         twitterIframe.setAttribute("allowfullscreen", "true");
        //         twitterIframe.setAttribute("frameborder", "0");
        //         twitterIframe.style.width = "100%";
        //         twitterIframe.style.height = "500px"; // Adjust the height as needed
        //         typeContainer.appendChild(twitterIframe);
        //     }
        //     break;

        default:
            break;
    }

    window.addEventListener("keydown", showKeydownFunction);
}

function closeShowModal() {
    window.removeEventListener("keydown", showKeydownFunction);

    document.querySelector(".showModal").classList.remove("block");
    document.querySelector(".showModal").classList.add("hidden");

    var allTypeContainer = document.querySelectorAll(`#typeContainer>.flex`);

    allTypeContainer.forEach((element) => {
        element.innerHTML = "";
        element.classList.remove("flex", "justify-center", "items-center");
        element.classList.add("hidden");
        element.removeAttribute('style');
    });
}

function showKeydownFunction(e) {
    if (e.key == "Escape") {
        closeShowModal();
    }
}
