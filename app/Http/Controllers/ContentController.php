<?php

namespace App\Http\Controllers;

use App\DTO\ContentDto;
use App\DTO\ContentKeywordDto;
use App\Http\Requests\Content\ContentStoreRequest;
use App\Http\Requests\Content\ContentUpdateRequest;
use App\Services\DashboardContentService;
use App\Services\Media\ContentMediaService;
use LogicException;

class ContentController extends Controller
{

    public function index(DashboardContentService $contentService)
    {
        $contents = $contentService->index();
        return view('dashboard.content.index', ['contents' => $contents]);
    }

    public function create(DashboardContentService $contentService)
    {
        try {

            $categories = $contentService->create();
            return view('dashboard.content.create', ['categories' => $categories]);

        } catch (\Exception $exception) {
            // Return Error

            toastr()->error($exception->getMessage());
            if ($exception instanceof LogicException) {
                toastr()->info('تم أعادة توجيهك لواجهة أنشاء التصنيفات');
                return redirect()->route('dashboard.category.index');
            }
            return back();
        }
    }

    public function store(ContentStoreRequest $request, DashboardContentService $contentService, ContentMediaService $contentMediaService)
    {
        try {

            // Create New Content DTO
            $contentDto = new ContentDto(
                $request->validated('title'),
                $request->validated('body'),
                $request->validated('resource_id'),
                $request->validated('category_id'),
                null,
                0,
                now(),
            );

            $contentKeywordDto = new ContentKeywordDto(
                null,
                json_decode($request->validated('keywordsArray')),
            );

            // Category Store Service
            $contentService->store($contentDto, $contentKeywordDto, $request, $contentMediaService);

            // Return Success
            toastr()->success('تم إنشاء المحتوى بنجاح.');
            return redirect()->route('dashboard.content.index');

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }


    public function edit(string $contentId, DashboardContentService $contentService)
    {
        try {

            list($content, $categories, $keywords) = $contentService->edit($contentId);
            return view('dashboard.content.edit', ['content' => $content, 'categories' => $categories, 'keywords' => $keywords]);

        } catch (\Exception $exception) {
            // Return Error
            dd($exception);
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }

    public function update(string $contentId, ContentUpdateRequest $request, DashboardContentService $contentService, ContentMediaService $contentMediaService)
    {
        try {

            // Create New Content DTO
            $contentDto = new ContentDto(
                $request->validated('title'),
                $request->validated('body'),
                $request->validated('resource_id'),
                $request->validated('category_id'),
                null,
                0,
                now()
            );

            $contentKeywordDto = new ContentKeywordDto(
                null,
                json_decode($request->validated('keywordsArray')),
            );

            // Category Store Service
            $contentService->update($contentId, $contentDto, $contentKeywordDto, $request, $contentMediaService);

            // Return Success
            toastr()->success('تم تعديل المحتوى بنجاح.');
            return redirect()->route('dashboard.content.index');

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }

    public function destroy(string $contentId, DashboardContentService $contentService, ContentMediaService $contentMediaService)
    {
        try {
            $contentService->destroy($contentId, $contentMediaService);

            // Return Success
            toastr()->success('تم حذف المحتوى بنجاح.');
            return redirect()->route('dashboard.content.index');

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }
}
