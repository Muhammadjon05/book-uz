<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        $booksData = [
            ['name' => 'Pride and Prejudice', 'pages_count' => 279, 'photo_url' => 'https://example.com/pride_and_prejudice.jpg', 'published_year' => 1813, 'description' => 'Classic novel by Jane Austen.', 'has_discount' => null, 'discount' => null, 'category_id' => 1],
            ['name' => 'Great Expectations', 'pages_count' => 544, 'photo_url' => 'https://example.com/great_expectations.jpg', 'published_year' => 1861, 'description' => 'Classic novel by Charles Dickens.', 'has_discount' => true, 'discount' => 10.5, 'category_id' => 2],
            ['name' => 'Hamlet', 'pages_count' => 342, 'photo_url' => 'https://example.com/hamlet.jpg', 'published_year' => 1603, 'description' => 'Tragedy by William Shakespeare.', 'has_discount' => null, 'discount' => null, 'category_id' => 1],
            ['name' => 'Wuthering Heights', 'pages_count' => 416, 'photo_url' => 'https://example.com/wuthering_heights.jpg', 'published_year' => 1847, 'description' => 'Gothic novel by Emily Brontë.', 'has_discount' => true, 'discount' => 15.2, 'category_id' => 2],
            ['name' => '1984', 'pages_count' => 328, 'photo_url' => 'https://example.com/1984.jpg', 'published_year' => 1949, 'description' => 'Dystopian novel by George Orwell.', 'has_discount' => true, 'discount' => 20, 'category_id' => 3],
            ['name' => 'To Kill a Mockingbird', 'pages_count' => 281, 'photo_url' => 'https://example.com/to_kill_a_mockingbird.jpg', 'published_year' => 1960, 'description' => 'Novel by Harper Lee.', 'has_discount' => null, 'discount' => null, 'category_id' => 4],
            ['name' => 'War and Peace', 'pages_count' => 1225, 'photo_url' => 'https://example.com/war_and_peace.jpg', 'published_year' => 1869, 'description' => 'Epic novel by Leo Tolstoy.', 'has_discount' => true, 'discount' => 25, 'category_id' => 1],
            ['name' => 'The Hobbit', 'pages_count' => 310, 'photo_url' => 'https://example.com/the_hobbit.jpg', 'published_year' => 1937, 'description' => 'Fantasy novel by J.R.R. Tolkien.', 'has_discount' => true, 'discount' => 12.5, 'category_id' => 5],
            ['name' => 'To the Lighthouse', 'pages_count' => 209, 'photo_url' => 'https://example.com/to_the_lighthouse.jpg', 'published_year' => 1927, 'description' => 'Modernist novel by Virginia Woolf.', 'has_discount' => null, 'discount' => null, 'category_id' => 6],
            ['name' => 'The Old Man and the Sea', 'pages_count' => 127, 'photo_url' => 'https://example.com/the_old_man_and_the_sea.jpg', 'published_year' => 1952, 'description' => 'Novella by Ernest Hemingway.', 'has_discount' => true, 'discount' => 15, 'category_id' => 7],
            ['name' => 'Fahrenheit 451', 'pages_count' => 158, 'photo_url' => 'https://example.com/fahrenheit_451.jpg', 'published_year' => 1953, 'description' => 'Dystopian novel by Ray Bradbury.', 'has_discount' => true, 'discount' => 18.5, 'category_id' => 3],
            ['name' => 'The Time Machine', 'pages_count' => 84, 'photo_url' => 'https://example.com/the_time_machine.jpg', 'published_year' => 1895, 'description' => 'Science fiction novel by H.G. Wells.', 'has_discount' => null, 'discount' => null, 'category_id' => 7],
            ['name' => 'Brave New World', 'pages_count' => 311, 'photo_url' => 'https://example.com/brave_new_world.jpg', 'published_year' => 1932, 'description' => 'Dystopian novel by Aldous Huxley.', 'has_discount' => true, 'discount' => 22.3, 'category_id' => 3],
            ['name' => 'The Catcher in the Rye', 'pages_count' => 224, 'photo_url' => 'https://example.com/the_catcher_in_the_rye.jpg', 'published_year' => 1951, 'description' => 'Novel by J.D. Salinger.', 'has_discount' => null, 'discount' => null, 'category_id' => 4],
            ['name' => 'Crime and Punishment', 'pages_count' => 671, 'photo_url' => 'https://example.com/crime_and_punishment.jpg', 'published_year' => 1866, 'description' => 'Novel by Fyodor Dostoevsky.', 'has_discount' => true, 'discount' => 21, 'category_id' => 1],
            ['name' => 'Alice\'s Adventures in Wonderland', 'pages_count' => 200, 'photo_url' => 'https://example.com/alices_adventures_in_wonderland.jpg', 'published_year' => 1865, 'description' => 'Fantasy novel by Lewis Carroll.', 'has_discount' => true, 'discount' => 13.8, 'category_id' => 5],
            ['name' => 'The Great Gatsby', 'pages_count' => 180, 'photo_url' => 'https://example.com/the_great_gatsby.jpg', 'published_year' => 1925, 'description' => 'Novel by F. Scott Fitzgerald.', 'has_discount' => null, 'discount' => null, 'category_id' => 6],
            ['name' => 'Moby-Dick', 'pages_count' => 585, 'photo_url' => 'https://example.com/moby_dick.jpg', 'published_year' => 1851, 'description' => 'Novel by Herman Melville.', 'has_discount' => true, 'discount' => 16.7, 'category_id' => 7],
            ['name' => 'Frankenstein', 'pages_count' => 280, 'photo_url' => 'https://example.com/frankenstein.jpg', 'published_year' => 1818, 'description' => 'Gothic novel by Mary Shelley.', 'has_discount' => true, 'discount' => 19.2, 'category_id' => 1],
            ['name' => 'Les Misérables', 'pages_count' => 1463, 'photo_url' => 'https://example.com/les_miserables.jpg', 'published_year' => 1862, 'description' => 'Novel by Victor Hugo.', 'has_discount' => true, 'discount' => 23.1, 'category_id' => 3],
            ['name' => 'The Shining', 'pages_count' => 447, 'photo_url' => 'https://example.com/the_shining.jpg', 'published_year' => 1977, 'description' => 'Horror novel by Stephen King.', 'has_discount' => true, 'discount' => 14.5, 'category_id' => 7],
            ['name' => 'The Sun Also Rises', 'pages_count' => 251, 'photo_url' => 'https://example.com/the_sun_also_rises.jpg', 'published_year' => 1926, 'description' => 'Novel by Ernest Hemingway.', 'has_discount' => null, 'discount' => null, 'category_id' => 6],
            ['name' => 'The Picture of Dorian Gray', 'pages_count' => 254, 'photo_url' => 'https://example.com/the_picture_of_dorian_gray.jpg', 'published_year' => 1890, 'description' => 'Gothic and philosophical novel by Oscar Wilde.', 'has_discount' => true, 'discount' => 17.3, 'category_id' => 7],
        ];
        foreach ($booksData as $bookData) {
            $book = Book::create($bookData);

            $authorsCount = Author::count();

            $numberOfAuthors = rand(1, min(2, $authorsCount));
            $book->authors()->attach(
                Author::all()->random($numberOfAuthors)->pluck('id')->toArray(),
                ['created_at' => now(), 'updated_at' => now()]
            );

        }


    }
}
