<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Services\BookService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookController extends Controller
{
    public function __construct(protected BookService $service)
    {
    }

    public function index()
    {
        $books = $this->service->index();
        return $books;
    }

    public function store(StoreBookRequest $request)
    {
        $book = $this->service->insert($request);
        return $book;
    }

    public function show($id)
    {
        try {
            $book = $this->service->byId($id);
            return $book;
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => "book not found with id:{$id}"],404);
        }
    }


    public function edit(Book $book)
    {
    }
    public function update(UpdateBookRequest $request, Book $book)
    {

    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['result' => 'deleted']);
    }
}
