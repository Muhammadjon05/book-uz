<?php

namespace App\Services;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;

class AuthorService
{
    public function insert(StoreAuthorRequest $request)
    {
        $author = new Author();
        $author->fill($request->validated());
        $author->save();
        return $author;
    }

    public function byId($id)
    {
        $author = Author::with('books')->findOrFail($id);
        return $author;
    }

}
