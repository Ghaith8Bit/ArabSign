<?php

namespace App\Services;

use App\DTO\ContentDto;
use App\DTO\ContentKeywordDto;
use App\Http\Requests\Content\ContentStoreRequest;
use App\Http\Requests\Content\ContentUpdateRequest;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentKeyword;
use App\Services\Media\ContentMediaService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use LogicException;

class DashboardContentService
{
    public function index()
    {
        return Content::paginate(10);
    }

    public function create()
    {
        $categories = Category::all();
        if ($categories->isEmpty()) {
            throw new LogicException('لا يمكنك أنشاء محتوى دون أضافة تصنيفات');
        }

        return $categories;
    }


    public function store(ContentDto $contentDto, ContentKeywordDto $contentKeywordDto, ContentStoreRequest $request, ContentMediaService $contentMediaService)
    {
        if ($request->hasFile('thumbnail')) {

            // Set required parameters for ContentMediaService
            $contentMediaService
                ->setPath('Thumbnail')
                ->setFile($request->file('thumbnail'))
                ->setDisk('public')->bootCreate();

            // Set the path after saving it to storage
            $contentDto->setThumbnail($contentMediaService->saveMedia());

        } else {
            // Send Error
            throw new LogicException('يجب إدخال صورة لا يمكنك تركها فارغة');
        }

        // Create new content
        $content = Content::create($contentDto->toArray());

        // Assign the new content id to the contentKeywordDto
        $contentKeywordDto->setContentId($content->id);


        foreach ($contentKeywordDto->getKeywords() as $keyword) {
            ContentKeyword::create($contentKeywordDto->toArray($keyword));
        }
    }

    public function edit(string $contentId)
    {
        // Get the data form the database
        $content = Content::find($contentId);
        $categories = Category::all();


        if ($categories->isEmpty()) {
            throw new LogicException('لا يمكنك تعديل المحتوى دون أضافة تصنيفات');
        }

        if (! $content) {
            throw new ModelNotFoundException('المحتوى الذي تحاول الوصول اليه غير موجود في قاعدة البيانات');
        }

        $keywords = json_encode($content->keywords->pluck('keyword'));

        return [$content, $categories, $keywords];
    }

    public function update(string $contentId, ContentDto $contentDto, ContentKeywordDto $contentKeywordDto, ContentUpdateRequest $request, ContentMediaService $contentMediaService)
    {
        $content = Content::find($contentId);

        if (! $content) {
            throw new ModelNotFoundException('المحتوى الذي تحاول الوصول اليه غير موجود في قاعدة البيانات');
        }

        $contentDto->setThumbnail($content->getRawOriginal('thumbnail'));
        $contentDto->setViews($content->views);
        $contentDto->setPublishedAt($content->published_at);

        if ($request->hasFile('thumbnail')) {

            // Set the disk
            $contentMediaService->setDisk('public');

            // Get the path
            $path = $content->getRawOriginal('thumbnail');

            // Set the path
            $contentMediaService->setPath($path);

            // Delete the media from the storage
            $contentMediaService->deleteMedia();

            // Set required parameters for ContentMediaService
            $contentMediaService
                ->setPath('Thumbnail')
                ->setFile($request->file('thumbnail'))
                ->setDisk('public')->bootCreate();

            // Set the path after saving it to storage
            $contentDto->setThumbnail($contentMediaService->saveMedia());
        }

        $content->keywords()->delete();

        // Assign the new content id to the contentKeywordDto
        $contentKeywordDto->setContentId($content->id);


        foreach ($contentKeywordDto->getKeywords() as $keyword) {
            ContentKeyword::create($contentKeywordDto->toArray($keyword));
        }

        $content->update($contentDto->toArray());
    }

    public function destroy(string $contentId, ContentMediaService $contentMediaService)
    {
        $content = Content::find($contentId);

        if (! $content) {
            throw new ModelNotFoundException('المحتوى الذي تحاول الوصول اليه غير موجود في قاعدة البيانات');
        }

        // Set the disk
        $contentMediaService->setDisk('public');

        // Define the url and base url
        $url = $content->thumbnail;
        $baseUrl = Storage::disk($contentMediaService->getDisk())->url('');

        // Remove the prefix from the url
        if (strpos($url, $baseUrl) === 0) {
            $path = substr($url, strlen($baseUrl));
        } else {
            throw new LogicException('هناك مشكلة في الصورة التي تحاول حذفها');
        }

        // Set the path
        $contentMediaService->setPath($path);

        $content->keywords()->delete();

        // Delete the media from the storage
        $contentMediaService->deleteMedia();

        $content->delete();
    }
}
