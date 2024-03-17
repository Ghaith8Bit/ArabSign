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

    {{-- Owl Learn Style  --}}
    <link rel="stylesheet" href="{{ asset('assets/website/pages/home/css/learn/learn-slider.css') }}">

    {{-- Owl Learn Style  --}}
    <link rel="stylesheet" href="{{ asset('assets/website/pages/home/css/blog/blog-slider.css') }}">

@endsection

@section('content')
    <x-website.home.hero />
    <x-website.home.about />
    <x-website.home.content :contents="$contents" />
    <x-website.home.learn />
    <x-website.home.blog />
    <x-website.home.course />
@endsection

@section('scripts')
    {{-- Small Card Text --}}
    <script src="{{ asset('assets/website/pages/home/js/content/small-card-text.js') }}"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    {{-- Owl Caroussel --}}
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Owl Caroussel Settings Learn --}}
    <script src="{{ asset('assets/website/pages/home/js/learn/learn-carousel.js') }}"></script>

    {{-- Owl Caroussel Settings Blog --}}
    <script src="{{ asset('assets/website/pages/home/js/blog/blog-carousel.js') }}"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/5524b61dba.js" crossorigin="anonymous"></script>

@endsection

@section('structured_data')

@endsection

@section('meta_description', ' This is a special page on my website.')

@section('meta_keywords', 'page, keywords, here')

@section('og_title', 'My Page Title')

@section('og_description', 'This is the description for the Open Graph tag.')

@section('og_type', 'website')

@section('meta_title', 'My Page Title')
