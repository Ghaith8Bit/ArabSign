function getResource(content) {
    var typeContainer = document.querySelector(
        `#typeContainer>div[media-type=${content.resource.type}]`
    );

    typeContainer.classList.remove("hidden");
    typeContainer.classList.add("flex", "justify-center", "items-center");

    switch (content.resource.type) {
        case "Image":
        case "GIF":
            var background = `url('${content.resource.path}')`;
            typeContainer.style.backgroundImage = background;
            typeContainer.style.backgroundRepeat = 'no-repeat';
            typeContainer.style.backgroundPosition = 'center';
            typeContainer.style.backgroundSize = 'contain';
            break;

        case "Video":
            var videoElement = document.createElement("video");
            videoElement.src = content.resource.path;
            videoElement.autoplay = false;
            videoElement.loop = true;
            videoElement.muted = false;
            videoElement.controls = true;

            // Set the width and height of the video element
            videoElement.style.width = "500px";
            videoElement.style.height = "500px";

            typeContainer.appendChild(videoElement);
            break;


        case "Facebook":
            var iframeElement = document.createElement("iframe");
            iframeElement.src =
                "https://www.facebook.com/plugins/video.php?href=" +
                encodeURIComponent(content.resource.path) +
                "&show_text=0&width=560";

            iframeElement.setAttribute("allowfullscreen", "true");

            iframeElement.setAttribute(
                "allow",
                "autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            );
            iframeElement.setAttribute("frameborder", "0");
            iframeElement.setAttribute("scrolling", "no");
            iframeElement.setAttribute("allowtransparency", "true");
            iframeElement.style.width = "580px"
            iframeElement.style.height = "300px"


            typeContainer.appendChild(iframeElement);
            break;

        case "Instagram":
            var iframeElement = document.createElement("iframe");
            var videoId = content.resource.path.split("/")[4];
            iframeElement.src =
                "https://www.instagram.com/reel/" + videoId + "/embed/";
            iframeElement.style.width = "340px"
            iframeElement.style.height = "580px"
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
            var match = content.resource.path.match(
                /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/|youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/
            );


            if (match) {
                youtubeIframe.src = "https://www.youtube.com/embed/" + match[1];
                youtubeIframe.setAttribute("allowfullscreen", "true");
                youtubeIframe.setAttribute("frameborder", "0");


                var isShort = content.resource.path.includes("/shorts/");

                if (isShort) {
                    youtubeIframe.style.width = "340px"
                    youtubeIframe.style.height = "580px"
                } else {
                    youtubeIframe.style.width = "580px"
                    youtubeIframe.style.height = "340px"
                }

                typeContainer.appendChild(youtubeIframe);
            }
            break;


        case "TikTok":
            var tiktokIframe = document.createElement("iframe");
            var videoId = content.resource.path.split("/")[5];
            var embedUrl = "https://www.tiktok.com/embed/v2/" + videoId;
            tiktokIframe.src = embedUrl;
            // tiktokIframe.setAttribute("width", "50%");
            // tiktokIframe.setAttribute("height", "98%");
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
        case "X":
            var twitterIframe = document.createElement("iframe");
            var videoId = content.resource.path.split("/")[5];
            var embedUrl =
                "https://twitter.com/i/videos/" +
                videoId +
                "?embed_source=facebook&amp;embed_profile_id=twitter";
            twitterIframe.src = embedUrl;
            // twitterIframe.setAttribute("width", "80%");
            // twitterIframe.setAttribute("height", "98%");
            twitterIframe.setAttribute("allowfullscreen", "true");
            twitterIframe.setAttribute("frameborder", "0");
            typeContainer.appendChild(twitterIframe);
            break;

        default:
            break;
    }

}
