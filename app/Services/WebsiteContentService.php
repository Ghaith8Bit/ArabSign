<?php

namespace App\Services;

use App\Http\Requests\Content\ContentSearchRequest;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentKeyword;
use App\Services\Search\ContentSearchService;

class WebsiteContentService
{
    public function index(ContentSearchRequest $request, ContentSearchService $searchService)
    {
        $data = $this->search($request, $searchService);
        $data[] = Category::all();
        return $data;
    }

    private function search(ContentSearchRequest $request, ContentSearchService $searchService)
    {
        $searchService
            ->setModel(Content::class)
            ->setRelationModel(ContentKeyword::class)
            ->setFilterModel(Category::class)
            ->setFilterIds(json_decode($request->validated('category') ?? null))
            ->setFilterKey('category_id')
            ->setColumn('keyword')
            ->setWith(['category'])
            ->setQuery($request->validated('query') ?? null)
            ->setPaginate(3);

        return $searchService->search();
    }

    public function filter(ContentSearchRequest $request, ContentSearchService $searchService)
    {
        $searchService
            ->setModel(Content::class)
            ->setRelationModel(ContentKeyword::class)
            ->setColumn('keyword')
            ->setWith(['category'])
            ->setQuery($request->validated('query') ?? null)
            ->setPaginate(12);

        return $searchService->search();
    }

}
