<?php

namespace App\Http\Controllers;

use App\DTO\ResourceDto;
use App\Http\Requests\ResourceSearchRequest;
use App\Services\ResourceService;
use App\Services\Media\LibraryMediaService;
use App\Http\Requests\ResourceStoreRequest;
use App\Services\Search\SearchService;

class LibraryController extends Controller
{
    public function index(ResourceSearchRequest $request, ResourceService $resourceService, SearchService $searchService)
    {
        list($resources, $query) = $resourceService->index($request, $searchService);

        // Return the page with the results
        return view('dashboard.library', ['resources' => $resources, 'query' => $query]);
    }

    public function store(ResourceStoreRequest $request, ResourceService $resourceService, LibraryMediaService $libraryMediaService)
    {
        try {
            // Create New Resource DTO
            $resource = new ResourceDto(
                $request->validated('pre-keyword') . '.' . $request->validated('keyword'),
                $request->validated('type'),
                null
            );

            // Resource Store Service
            $resourceService->store($resource, $request, $libraryMediaService);

            // Return Success
            toastr()->success('تم إنشاء المورد بنجاح.');
            return back();

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }

    }

    public function destroy(string $resourceId, ResourceService $resourceService, LibraryMediaService $libraryMediaService)
    {
        try {

            // Resource Destroy Service
            $resourceService->destroy($resourceId, $libraryMediaService);

            // Return Success
            toastr()->success('تم حذف المورد بنجاح.');
            return back();

        } catch (\Exception $exception) {

            // Return Error
            toastr()->error($exception->getMessage());
            return back();
        }
    }
}
