@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-wrap -mx-3 mt-6">
        <div class="flex-none w-full max-w-full px-3 py-10">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex justify-between items-center">
                        <h6>Content List</h6>
                        <button class="bg-primaryColor text-white px-2 py-0.5 rounded-full cursor-pointer"
                            onclick="window.location='{{ route('dashboard.content.create') }}'">
                            <i class="fas fa-plus transform transition-transform hover:rotate-180"></i>
                        </button>
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <x-dashboard.content.index.table :contents="$contents" />
                    </div>
                </div>
                <x-dashboard.content.index.pagination :paginator="$contents" />
            </div>
        </div>
    </div>
@endsection

@section('style')

@endsection

@section('modal')
    <x-dashboard.content.index.modal.delete />
@endsection

@section('script')
    <script src="{{ asset('assets/dashboard/pages/content/index/js/toggleDropdown.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/content/index/js/delete-modal.js') }}"></script>
@endsection


@section('title', 'My Page Title')
