<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Services\AuthorService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorController extends Controller
{
    public function __construct(protected AuthorService $service)
    {

    }
    public function index()
    {
        $authors = $this->service->index();
        return $authors;
    }

    public function store(StoreAuthorRequest $request)
    {
        $author = $this->service->insert($request);
        return $author;
    }
    public function show($id)
    {
        try {
            $author = $this->service->byId($id);
            return $author;
        } catch (ModelNotFoundException $e) {
            return response()->json(['errors' => "Author not found with ID: {$id}"], 404);
        }
    }
    public function edit(Author $author)
    {

    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {

    }


    public function destroy(Author $author)
    {
    }
}
