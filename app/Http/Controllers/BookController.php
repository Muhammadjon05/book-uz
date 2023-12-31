<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Services\BookService;

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

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = $this->service->byId($id);
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {

    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['result'=>'deleted']);
    }
}
