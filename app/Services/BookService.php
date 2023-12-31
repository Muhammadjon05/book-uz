<?php

namespace App\Services;

use App\Models\Book;

class BookService
{
    public function index()
    {
        $books = Book::with('authors')->with('reviews')->get();
        return $books;
    }
}
