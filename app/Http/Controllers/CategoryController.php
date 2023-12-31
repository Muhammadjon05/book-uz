<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Services\CategoryService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryController extends Controller
{

    public function __construct(protected CategoryService $service)
    {

    }

    public function index()
    {

    }

    public function store(StoreCategoryRequest $request)
    {
        $category = $this->service->insert($request);
        return $category;
    }

    public function show($id)
    {
        try {
            $categories = $this->service->categoryById($id);
            return $categories;
        } catch (ModelNotFoundException $e) {
            return response()->json(['errors' => "Category not found with ID: {$id}"],404);
        }
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    public
    function destroy(Category $category)
    {
    }
}
