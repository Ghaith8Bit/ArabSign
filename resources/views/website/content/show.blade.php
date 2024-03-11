@extends('layouts.website')

@section('meta')

@endsection

@section('styles')
    {{-- Owl Carousel Min Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Owl Theme Default Min Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container mt-20 mx-auto justify-center">
        <div class="flex flex-col gap-20 px-12">
            <h3 class="text-2xl text-textColor font-bold text-center">{{ $content->title }}</h3>
            <p class="text-lg">{{ $content->body }}</p>
            <div id="typeContainer" class="transition-opacity flex items-center justify-center">
                <div class="hidden w-[90%] h-[512px]" media-type="Image">

                </div>

                <div class="hidden w-[90%] h-[400px]" media-type="GIF">

                </div>

                <div class="hidden" media-type="Video">

                </div>

                <div class="hidden w-3/4 h-full" media-type="Facebook">

                </div>

                <div class="hidden" media-type="Instagram">

                </div>

                <div class="hidden max-w-[80%]" media-type="YouTube">

                </div>

                <div class="hidden" media-type="TikTok">

                </div>

                <div class="hidden" media-type="X">

                </div>
            </div>
        </div>
    </div>



    {{-- <div class="flex justify-between max-sm:justify-center  max-md:justify-center  max-lg:justify-center ">
        <div
            class="flex flex-col w-2/3 relative mt-6 rounded-xl p-8 max-xlg:p-8 items-center gap-10 max-sm:justify-center  max-md:justify-center  max-lg:justify-center">
            <div
                class=" w-2/3  flex-col justify-center items-center gap-4 flex text-center text-neutral-700 text-opacity-80 text-xl font-normal px-8 leading-loose">
                <h3 class="text-neutral-700 text-3xl font-bold" style="width: 28rem">غيث وعامر وابو بشير وابو غالب عم
                    من
                    راميو </h3>
                <p class="max-sm:w-[26rem] max-md:w-[36rem] max-lg:w-[44rem] w-[50rem] text-start mt-10 max-xl:w-[30rem]">
                    النموذج 1: الربيع ها أنت – أيها الربيع –. أقبلت، فأقبلت معك الحياة بجميع صنوفها وألوانها. النبات ينبت،
                    والأشجار تورق وتزهر، والهرة تموء، والقمري يسجع، والغنم يثغو، والبقر يخور، وكل أليف يدعو أليفه. كل شيء
                    يشعر بالحياة وينسي هموم الحياة. إن كان الزمان جسدًا فأنت روحه، وإن كان عمرًا فأنت شبابه. ها أنت بسحرك
                    العجيب، استطعت أن تجعل من الشمس حائكًا نساجًا يحوك أجمل الروض ويوشّيه.


                </p>
            </div>


            <div id="typeContainer">
                <div class="hidden h-full" media-type="Image">

                </div>

                <div class="hidden h-full" media-type="GIF">

                </div>

                <div class="hidden h-full" media-type="Video">

                </div>

                <div class="hidden h-full  " media-type="Facebook">

                </div>

                <div class="hidden h-full" media-type="Instagram">

                </div>

                <div class="hidden h-full" media-type="YouTube">

                </div>

                <div class="hidden h-full" media-type="TikTok">

                </div>

                <div class="hidden h-full" media-type="X">

                </div>

            </div>


            <script>
                window.addEventListener('DOMContentLoaded', getResource({
                    type: "Video",
                    path: "http://127.0.0.1:8000/storage/Content/Video/65e4c444d06db.mp4"
                }));

                function getResource(resource) {
                    var typeContainer = document.querySelector(
                        `#typeContainer>div[media-type=${resource.type}]`
                    );
                    typeContainer.classList.remove("hidden");
                    typeContainer.classList.add("block");

                    switch (resource.type) {
                        case "Image":
                        case "GIF":
                            var imgElement = document.createElement("img");
                            imgElement.src = resource.path;
                            imgElement.classList.add("rounded-lg", "w-3/4", "mx-auto");
                            typeContainer.appendChild(imgElement);
                            break;

                        case "Video":
                            var videoElement = document.createElement("video");
                            videoElement.src = resource.path;
                            videoElement.controls = true;
                            videoElement.classList.add("rounded-lg", "w-3/4", "mx-auto");
                            typeContainer.appendChild(videoElement);
                            break;

                        case "Facebook":
                            var iframeElement = document.createElement("iframe");
                            iframeElement.src =
                                "https://www.facebook.com/plugins/video.php?href=" +
                                encodeURIComponent(resource.path) +
                                "&show_text=0&width=560";
                            iframeElement.classList.add("rounded-lg", "w-3/4");

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
                            iframeElement.setAttribute("width", "50%");
                            iframeElement.setAttribute("height", "98%");
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
                                /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/
                            );
                            if (match) {
                                youtubeIframe.src = "https://www.youtube.com/embed/" + match[1];
                                youtubeIframe.setAttribute("width", "80%");
                                youtubeIframe.setAttribute("height", "98%");
                                youtubeIframe.setAttribute("allowfullscreen", "true");
                                youtubeIframe.setAttribute("frameborder", "0");
                                typeContainer.appendChild(youtubeIframe);
                            }
                            break;

                        case "TikTok":
                            var tiktokIframe = document.createElement("iframe");
                            var videoId = resource.path.split("/")[5];
                            var embedUrl = "https://www.tiktok.com/embed/v2/" + videoId;
                            tiktokIframe.src = embedUrl;
                            tiktokIframe.setAttribute("width", "50%");
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
                        case "X":
                            var twitterIframe = document.createElement("iframe");
                            var videoId = resource.path.split("/")[5];
                            var embedUrl =
                                "https://twitter.com/i/videos/" +
                                videoId +
                                "?embed_source=facebook&amp;embed_profile_id=twitter";
                            twitterIframe.src = embedUrl;
                            twitterIframe.setAttribute("width", "80%");
                            twitterIframe.setAttribute("height", "98%");
                            twitterIframe.setAttribute("allowfullscreen", "true");
                            twitterIframe.setAttribute("frameborder", "0");
                            typeContainer.appendChild(twitterIframe);
                            break;

                        default:
                            break;
                    }

                }
            </script>



        </div>
        <div
            class="flex flex-col mt-8 p-4 gap-8 ml-8 max-sm:hiddeh max-md:hidden h-[54rem]  max-lg:hidden bg-gradient-to-b from-secondaryColor to-primaryColor rounded-2xl ">

            <h3 class="text-2xl text-center text-gray-100 font-medium"> المنشورات الشائعة</h3>

            <div class=" ">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-xl overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">title
                        </span>
                        <h2 class="mt-2 mb-2  font-bold">منصة تعلم لغة الاشارة </h2>
                        <p class="text-sm">منصة لتعلم لغة الاشارة للصم والبكم العرب والاجانب </p>

                    </div>
                    <div class="p-4  text-sm text-gray-700 flex  gap-y-4 justify-evenly">
                        <span class="flex items-baseline mb-1">
                            <i class="fa-regular fa-calendar-days ml-2 "></i> 20/20/2020
                        </span>
                        <span class="flex  items-baseline mb-1">
                            <i class="fa-solid fa-eye ml-2 "></i> 5000
                        </span>
                    </div>
                </a>
            </div>
            <div class=" ">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-xl overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt="">
                    </div>
                    <div class="p-4">
                        <span
                            class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">title
                        </span>
                        <h2 class="mt-2 mb-2  font-bold">منصة تعلم لغة الاشارة </h2>
                        <p class="text-sm">منصة لتعلم لغة الاشارة للصم والبكم العرب والاجانب </p>

                    </div>
                    <div class="p-4  text-sm text-gray-700 flex  gap-y-4 justify-evenly">
                        <span class="flex items-baseline mb-1">
                            <i class="fa-regular fa-calendar-days ml-2 "></i> 20/20/2020
                        </span>
                        <span class="flex  items-baseline mb-1">
                            <i class="fa-solid fa-eye ml-2 "></i> 5000
                        </span>
                    </div>
                </a>
            </div>
        </div>

    </div>

    </div>
    <div class="mt-20">

        <div class="flex ">
            <div
                class="flex flex-col bg-gradient-to-r w- from-secondaryColor to-primaryColor justify-center max-sm:block relative lg:hidden xl:hidden gap-y-6 rounded-tl-[200px]">



                <div class=" flex-col xl:w-2/5 lg:w-2/6 h-[455px] flex justify-center rounded-tl-[200px] rounded-bl-2xl relative  max-lg:rounded-none sm:w-full md:w-full"
                    id="slider-width">

                    <div class="owl-carousel owl-theme mt-20 flex justify-center" id="content-carousel">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex justify-center">
                                <div
                                    class=" card w-full max-sm:w-5/6 flex justify-center max-md:w-3/6 lg:w-3/4 xl:w-2/3 p-4 max-sm:px-16 ">
                                    <a href=""
                                        class="c-card block bg-white shadow-md hover:shadow-xl rounded-xl overflow-hidden">
                                        <div class="relative pb-48 overflow-hidden">
                                            <img class="absolute inset-0 h-full w-full object-cover"
                                                src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                                alt="">
                                        </div>
                                        <div class="p-4">
                                            <span
                                                class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">title
                                            </span>
                                            <h2 class="mt-2 mb-2  font-bold">منصة تعلم لغة الاشارة </h2>
                                            <p class="text-sm">منصة لتعلم لغة الاشارة للصم والبكم العرب والاجانب </p>

                                        </div>
                                        <div class="p-4  text-sm text-gray-700 flex  gap-y-4 justify-evenly">
                                            <span class="flex items-baseline mb-1">
                                                <i class="fa-regular fa-calendar-days ml-2 "></i> 20/20/2020
                                            </span>
                                            <span class="flex  items-baseline mb-1">
                                                <i class="fa-solid fa-eye ml-2 "></i> 5000
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div> --}}


@endsection

@section('scripts')
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    {{-- Owl Caroussel --}}
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $("#content-carousel").owlCarousel({
                items: 1,
                loop: false,
                nav: true,
                dots: false,
                responsiveClass: true,
                rtl: true,

            });
        });
    </script>

    <script src="{{ asset('assets/website/pages/content/show/iframe-show.js') }}"></script>
    <script>
        window.addEventListener('DOMContentLoaded', getResource({!! json_encode($content) !!}));
    </script>
@endsection

@section('structured_data')

@endsection

@section('meta_description', ' This is a special page on my website.')

@section('meta_keywords', 'page, keywords, here')

@section('og_title', 'My Page Title')

@section('og_description', 'This is the description for the Open Graph tag.')

@section('og_type', 'website')

@section('meta_title', 'My Page Title')
