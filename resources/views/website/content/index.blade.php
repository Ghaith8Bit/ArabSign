@extends('layouts.website')

@section('meta')

@endsection

@section('content')
    <x-website.content.hero />

    <div class="container mx-auto">
        <div class="flex items-center md:ml-auto md:pr-4 mb-4 justify-between my-6 px-10" style="direction: rtl">
            <x-website.content.action.search :query="$query" />
            <x-website.content.action.filter />
        </div>
        <div class="flex flex-wrap mx-2">
            @forelse ($contents as $content)
                <x-website.content.card :content="$content" />
            @empty
                <h2 class="text-3xl text-center w-full py-20 text-gray-600">لا يوجد محتوى يمكن عرضه</h2>
            @endforelse
        </div>
        <x-website.content.pagination :paginator="$contents" />
    </div>

    <x-website.content.modal.filter :categories="$categories" />
@endsection

@section('styles')
@endsection

@section('scripts')
    <script src="https://kit.fontawesome.com/5524b61dba.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/website/pages/content/js/filter-modal.js') }}"></script>
    <script src="{{ asset('assets/website/pages/content/js/change-parameter.js') }}"></script>
    <script src="{{ asset('assets/website/pages/content/js/select-category.js') }}"></script>
    <script src="{{ asset('assets/website/pages/content/js/search-bar.js') }}"></script>
@endsection

@section('structured_data')

@endsection

@section('meta_description', ' This is a special page on my website.')

@section('meta_keywords', 'page, keywords, here')

@section('og_title', 'My Page Title')

@section('og_description', 'This is the description for the Open Graph tag.')

@section('og_type', 'website')

@section('meta_title', 'My Page Title')
