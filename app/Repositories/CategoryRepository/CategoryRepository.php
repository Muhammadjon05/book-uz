<?php

namespace App\Repositories\CategoryRepository;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository\ICategoryRepository;
use App\Repositories\GenericRepositories\IGenericRepository;

class CategoryRepository implements ICategoryRepository
{
    protected $categoryrepository;
    public function __construct(IGenericRepository $categoryRepository)
    {
        $this->categoryrepository = $categoryRepository;
    }
    public function insert(StoreCategoryRequest $request)
    {
        $category = new Category([
            'name'=>  $request->input('name'),
        ]);
        $model = $this->categoryrepository->insert($category);
        return response()->json($model);
    }
}
