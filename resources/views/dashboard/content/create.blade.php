@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-wrap -mx-3 mt-6">
        <div class="flex-none w-full max-w-full md:px-3 py-10">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words md:bg-white border-0 border-transparent border-solid md:shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="md:p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex justify-between items-center">
                        <h6 class="text-lg font-semibold text-gray-700">Create New Content</h6>
                    </div>
                </div>
                <div class="md:flex-auto md:px-4 pt-8 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <x-dashboard.content.create.form :categories="$categories" />
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
    <script src="{{ asset('assets/dashboard/pages/content/create/js/simpleMDE-options.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/content/create/js/disable-inputs.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/content/create/js/library-redirect.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/content/create/js/keywords-input.js') }}"></script>
@endsection


@section('title', 'My Page Title')
