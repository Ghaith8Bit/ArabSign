<?php

namespace App\Http\Controllers;

use App\DTO\CategoryDto;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function index(CategoryService $categoryService)
    {
        $categories = $categoryService->index();
        return view('dashboard.category', ['categories' => $categories]);
    }

    public function store(CategoryStoreRequest $request, CategoryService $categoryService)
    {
        try {
            // Create New Category DTO
            $categoryDto = new CategoryDto(
                $request->validated('name'),
            );

            // Category Store Service
            $categoryService->store($categoryDto);

            // Return Success
            toastr()->success('تم إنشاء التصنيف بنجاح.');
            return back();

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }

    public function update(string $categoryId, CategoryUpdateRequest $request, CategoryService $categoryService)
    {
        try {
            // Create New Category DTO
            $categoryDto = new CategoryDto(
                $request->validated('name'),
            );

            // Category Store Service
            $categoryService->update($categoryId, $categoryDto);

            // Return Success
            toastr()->success('تم تعديل التصنيف بنجاح.');
            return back();

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }

    public function destroy(string $categoryId, CategoryService $categoryService)
    {
        try {
            // Category Store Service
            $categoryService->destroy($categoryId);

            // Return Success
            toastr()->success('تم حذف التصنيف بنجاح.');
            return back();

        } catch (\Exception $exception) {
            // Return Error
            toastr()->error($exception->getMessage());
            return back()->withInput();
        }
    }
}
