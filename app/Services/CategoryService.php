<?php

namespace App\Services;

use App\DTO\CategoryDto;
use App\Models\Category;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryService
{

    public function index()
    {
        return Category::all();
    }

    public function store(CategoryDto $categoryDto)
    {
        Category::create($categoryDto->toArray());
    }

    public function update($categoryId, CategoryDto $categoryDto)
    {
        try {
            // Get the category form the database
            $category = Category::find($categoryId);

            if (! $category) {
                throw new ModelNotFoundException('التصنيف الذي تحاول تعديله غير موجود في قاعدة البيانات');
            }

            // Update the Category in the database
            $category->update($categoryDto->toArray());

        } catch (ModelNotFoundException $exception) {
            throw new Exception($exception->getMessage());
        } catch (Exception $exception) {
            throw new Exception('حدث خطاء اثناء عملية التعديل يرجى المحاولة مجددا');
        }
    }

    public function destroy($categoryId)
    {
        try {
            // Get the category form the database
            $category = Category::find($categoryId);

            if (! $category) {
                throw new ModelNotFoundException('التصنيف الذي تحاول حذفه غير موجود في قاعدة البيانات');
            }

            // Delete the Category in the database
            $category->delete();

        } catch (ModelNotFoundException $exception) {
            throw new Exception($exception->getMessage());
        } catch (Exception $exception) {
            throw new Exception('حدث خطاء اثناء عملية الحذف يرجى المحاولة مجددا');
        }
    }
}
