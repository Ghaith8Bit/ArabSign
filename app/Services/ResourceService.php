<?php

namespace App\Services;

use App\DTO\ResourceDto;
use App\Enums\LibraryTypeEnum;
use App\Http\Requests\ResourceSearchRequest;
use App\Http\Requests\ResourceStoreRequest;
use App\Models\Resource;
use App\Services\Media\LibraryMediaService;
use App\Services\Search\SearchService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use LogicException;

class ResourceService
{
    public function index(ResourceSearchRequest $request, SearchService $searchService)
    {
        $searchService
            ->setQuery($request->validated('query') ?? null)
            ->setColumn('keyword')
            ->setModel(Resource::class)
            ->setPaginate(9);

        return $searchService->search();
    }

    public function store(ResourceDto $resource, ResourceStoreRequest $request, LibraryMediaService $libraryMediaService)
    {
        // Check if there's file
        if ($request->hasFile('file')) {

            // Set required parameters for LibraryMediaService
            $libraryMediaService
                ->setFile($request->file('file'))
                ->setType($resource->getType())
                ->setKeyword($request->validated('pre-keyword'))
                ->setDisk('public')->bootCreate();

            // Set the path after saving it to storage
            $resource->setPath($libraryMediaService->saveMedia());

            // Check if there's link
        } elseif (! is_null($request->validated('link'))) {

            // Check if type is local
            if (in_array($resource->getType(), [
                LibraryTypeEnum::Image,
                LibraryTypeEnum::GIF,
                LibraryTypeEnum::Video,
            ])) {
                // Send Error
                throw new LogicException('يجب إدخال نوع صالح للروابط الخارجية');
            }

            // Set the path to the external link
            $resource->setPath($request->validated('link'));

        } else {
            // Send Error
            throw new LogicException('يجب إدخال صورة أو رابط لا يمكنك تركهما فارغين');
        }


        // Create new resource
        Resource::create($resource->toArray());
    }

    public function destroy(string $resourceId, LibraryMediaService $libraryMediaService)
    {
        try {

            // Get the resource form the database
            $resource = Resource::find($resourceId);

            if (! $resource) {
                throw new ModelNotFoundException('المورد الذي تحاول حذفه غير موجود في قاعدة البيانات');
            }

            // Check if type is local
            if (in_array($resource->type, [
                LibraryTypeEnum::Image,
                LibraryTypeEnum::GIF,
                LibraryTypeEnum::Video,
            ])) {

                // Set the disk
                $libraryMediaService->setDisk('public');

                // Define the url and base url
                $url = $resource->path;
                $baseUrl = Storage::disk($libraryMediaService->getDisk())->url('');

                // Remove the prefix from the url
                if (strpos($url, $baseUrl) === 0) {
                    $path = substr($url, strlen($baseUrl));
                } else {
                    throw new LogicException('هناك مشكلة في الصورة التي تحاول حذفها');
                }

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
