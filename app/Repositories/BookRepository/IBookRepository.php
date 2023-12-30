<?php

namespace App\Repositories\BookRepository;

use App\Http\Requests\StoreBookRequest;

interface IBookRepository
{
    public function insert(StoreBookRequest $request);
}
