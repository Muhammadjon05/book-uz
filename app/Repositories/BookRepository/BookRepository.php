<?php

namespace App\Repositories\BookRepository;

use App\Http\Requests\StoreBookRequest;
use App\Repositories\BookRepository\IBookRepository;
use App\Repositories\GenericRepositories\IGenericRepository;

class BookRepository implements IBookRepository
{

    protected $bookRepository ;

    public function __construct(IGenericRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }
    public function insert(StoreBookRequest $request)
    {
        $bookRequest = new StoreBookRequest([
            'name' => $request->input('name'),
            'pages_count' => $request->input('pages_count'),
            'photo_url' => $request->input('photo_url'),
            'published_year' => $request->input('published_year'),
            'description' => $request->input('description'),
            'has_discount' => $request->input('has_discount'),
            'discount' => $request->input('discount'),
            'category_id' => $request->input('category_id'),
        ]);
        $book =  $this->bookRepository->insert($bookRequest);
        if($book != null){
            return response()->json([$book]);
        }
    }
}
