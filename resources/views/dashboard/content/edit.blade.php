@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-wrap -mx-3 mt-6">
        <div class="flex-none w-full max-w-full px-3 py-10">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex justify-between items-center">
                        <h6 class="text-lg font-semibold text-gray-700">Edit Content</h6>
                    </div>
                </div>
                <div class="flex-auto px-4 pt-8 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <x-dashboard.content.edit.form :categories="$categories" :content="$content" :keywords="$keywords" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection

@section('modal')

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="{{ asset('assets/dashboard/pages/content/edit/js/simpleMDE-options.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/content/edit/js/library-redirect.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/content/edit/js/keywords-input.js') }}"></script>
@endsection


@section('title', 'My Page Title')
