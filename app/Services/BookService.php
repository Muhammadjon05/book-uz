<?php

namespace App\Services;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Category;

class BookService
{
    public function index()
    {
        $books = Book::with('authors')->with('reviews')->get();
        return $books;
    }
    public function insert(StoreBookRequest $request)
    {
        $book = new Book();
        $book->fill($request->validated());
        $book->save();
        $authorIds = collect($request->input('authors'))->pluck('id')->toArray();
        $book->authors()->attach($authorIds);
        return $book;
    }
    public function byId($id)
    {
        $book = Book::with('authors')->with('reviews')->findOrFail($id);
        return $book;

    }
    public function delete($id): void
    {
        $book = $this->byId($id);
        $book->authors()->detach();
        $book ->delete();
    }
}
