@extends('layouts.dashboard')

@section('content')
    <div class="flex items-center md:ml-auto md:pr-4 mb-4 justify-between" style="direction: rtl">
        <div class="relative flex flex-wrap items-stretch  transition-all rounded-lg ease-soft">
            <x-dashboard.library.search :query="$query" />
        </div>
        <div>
            <button class="cursor-pointer">
                <i
                    class="fa-solid fa-plus cursor-pointer transform transition-transform hover:rotate-180 bg-primaryColor rounded-full text-white py-[5px] px-[6px] add"></i>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-8 ">
        @forelse ($resources as $resource)
            <x-dashboard.library.card :resource="$resource" />
        @empty
            <p class="text-gray-500 text-xl">
                No resources found. Consider adding new resources to your library.
            </p>
        @endforelse
    </div>

    <x-dashboard.pagination :paginator="$resources" />

@endsection

@section('modal')

    <!--modal for add resource  -->
    <x-dashboard.library.modals.create />

    <!-- modal for img-show-dialog-modal -->
    <x-dashboard.library.modals.show />

    <!--modal for delete -->
    <x-dashboard.library.modals.delete />

@endsection

@section('script')
    <script src="{{ asset('assets/dashboard/pages/library/js/add-modal.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/library/js/add-modal-switch.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/library/js/add-modal-drop.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/library/js/show-modal.js') }}"></script>
    <script src="{{ asset('assets/dashboard/pages/library/js/delete-modal.js') }}"></script>
@endsection


@section('title', 'My Page Title')
