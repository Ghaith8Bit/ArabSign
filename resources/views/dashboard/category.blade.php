@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-wrap -mx-3 mt-6">
        <div class="flex-none w-full max-w-full px-3 py-10">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex justify-between items-center">
                        <h6>Category List</h6>
                        <x-dashboard.category.create />
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <x-dashboard.category.table :categories="$categories" />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/dashboard/pages/category/js/crud-functions.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/category/js/toggleDropdown.js') }}"></script>
@endsection

@section('title', 'My Page Title')
