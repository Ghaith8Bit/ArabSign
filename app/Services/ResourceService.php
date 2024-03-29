<?php

namespace App\Services;

use App\DTO\ResourceDto;
use App\Enums\LibraryTypeEnum;
use App\Http\Requests\Resource\ResourceSearchRequest;
use App\Http\Requests\Resource\ResourceStoreRequest;
use App\Models\Resource;
use App\Services\Media\ContentMediaService;
use App\Services\Media\LibraryMediaService;
use App\Services\Search\ResourceSearchService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use LogicException;

class ResourceService
{
    public function index(ResourceSearchRequest $request, ResourceSearchService $searchService)
    {
        $searchService
            ->setQuery($request->validated('query') ?? null)
            ->setColumn('keyword')
            ->setModel(Resource::class)
            ->setPaginate(9);

        return $searchService->search();
    }

    public function store(ResourceDto $resourceDto, ResourceStoreRequest $request, LibraryMediaService $libraryMediaService)
    {
        // Check if there's file
        if ($request->hasFile('file')) {

            // Set required parameters for LibraryMediaService
            $libraryMediaService
                ->setFile($request->file('file'))
                ->setType($resourceDto->getType())
                ->setKeyword($request->validated('pre-keyword'))
                ->setDisk('public')->bootCreate();

            // Set the path after saving it to storage
            $resourceDto->setPath($libraryMediaService->saveMedia());

            // Check if there's link
        } elseif (! is_null($request->validated('link'))) {

            // Check if type is local
            if (in_array($resourceDto->getType(), [
                LibraryTypeEnum::Image,
                LibraryTypeEnum::GIF,
                LibraryTypeEnum::Video,
            ])) {
                // Send Error
                throw new LogicException('يجب إدخال نوع صالح للروابط الخارجية');
            }

            // Set the path to the external link
            $resourceDto->setPath($request->validated('link'));

        } else {
            // Send Error
            throw new LogicException('يجب إدخال صورة أو رابط لا يمكنك تركهما فارغين');
        }


        // Create new resource
        Resource::create($resourceDto->toArray());
    }

    public function destroy(string $resourceId, LibraryMediaService $libraryMediaService, DashboardContentService $dashboardContentService, ContentMediaService $contentMediaService)
    {
        try {

            // Get the resource form the database
            $resource = Resource::find($resourceId);

            if (! $resource) {
                throw new ModelNotFoundException('المورد الذي تحاول حذفه غير موجود في قاعدة البيانات');
            }

            foreach ($resource->contents as $content) {
                $dashboardContentService->destroy($content->id, $contentMediaService);
            }

            // Check if type is local
            if (in_array($resource->type, [
                LibraryTypeEnum::Image,
                LibraryTypeEnum::GIF,
                LibraryTypeEnum::Video,
            ])) {

                // Set the disk
                $libraryMediaService->setDisk('public');

                // Get the path
                $path = $resource->getRawOriginal('path');

                // Set the path
                $libraryMediaService->setPath($path);


                // Delete the media from the storage
                $libraryMediaService->deleteMedia();
            }

            // Delete the Resource from the database
            $resource->delete();

        } catch (LogicException | ModelNotFoundException $exception) {
            throw new Exception($exception->getMessage());
        } catch (Exception $exception) {
            throw new Exception('حدث خطاء اثناء عملية الحذف يرجى المحاولة مجددا');
        }
    }
}
