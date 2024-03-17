<?php

namespace App\Http\Controllers;

use App\Http\Requests\Content\ContentSearchRequest;
use App\Models\Content;
use App\Services\Search\ContentSearchService;
use App\Services\WebsiteContentService;

class WebsiteController extends Controller
{
    public function home()
    {
        $contents = Content::latest()->take(4)->get();
        return view('website.home', ['contents' => $contents]);
    }

    public function content_index(ContentSearchRequest $request, WebsiteContentService $contentService, ContentSearchService $searchService)
    {
        list($contents, $query, $categories) = $contentService->index($request, $searchService);
        return view('website.content.index', ['contents' => $contents, 'query' => $query, 'categories' => $categories]);
    }

    public function content_show(string $id, WebsiteContentService $contentService)
    {
        [$content, $relatedContents] = $contentService->show($id);
        return view('website.content.show', ['content' => $content, 'relatedContents' => $relatedContents]);
    }
}
