<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryService
{
    public function index()
    {
        $categories = Category::with('books')->get();
        return $categories;
    }
    public function insert(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->fill($request->validated());
        $category->save();
        return $category;
    }

    public function categoryById($id)
    {
        $category = Category::with('books')->findOrFail($id);
        return $category;

    }

}
