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
            ->setSortColumn('published_at')
            ->setQuery($request->validated('query') ?? null)
            ->setPaginate(12);

        return $searchService->search();
    }

    public function show(string $id)
    {
        $content = Content::with(['keywords', 'resource'])->find($id);

        // Get keywords of the current content
        $keywords = $content->keywords->pluck('keyword')->toArray();

        // Assuming $content is an instance of Content model
        $relatedContentIds = ContentKeyword::select('contents.id')
            ->join('contents', 'content_keywords.content_id', '=', 'contents.id')
            ->whereIn('content_keywords.keyword', $keywords)
            ->where('contents.id', '!=', $content->id)
            ->distinct()
            ->pluck('contents.id')
            ->toArray();

        $relatedContents = Content::select('contents.*')
            ->selectRaw('COUNT(content_keywords.keyword) as matching_keywords_count')
            ->join('content_keywords', 'contents.id', '=', 'content_keywords.content_id')
            ->whereIn('contents.id', $relatedContentIds)
            ->groupBy('contents.id')
            ->orderByDesc('matching_keywords_count')
            ->orderByRaw('CASE WHEN contents.category_id = ? THEN 0 ELSE 1 END', [$content->category_id])
            ->get();

        return [$content, $relatedContents];
    }


}
