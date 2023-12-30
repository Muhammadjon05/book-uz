<?php

namespace App\Repositories\CategoryRepository;

use App\Http\Requests\StoreCategoryRequest;

interface ICategoryRepository
{
    public function insert(StoreCategoryRequest $request);
}
