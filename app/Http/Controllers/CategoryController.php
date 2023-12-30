<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepository\ICategoryRepository;

class CategoryController extends Controller
{

    protected $categoryrepository;
    public function __construct(ICategoryRepository $categoryRepository)
    {
        $this->categoryrepository = $categoryRepository;
    }
    public function index()
    {

    }

    public function store(StoreCategoryRequest $request)
    {
        $category = $this->categoryrepository ->insert($request);
        return $category;
    }

    public function show(Category $category)
    {

    }



    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }
    public function destroy(Category $category)
    {
    }
}
