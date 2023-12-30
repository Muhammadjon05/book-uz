<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $authors = [
            ['full_name' => 'Jane Austen', 'date_of_birth' => '1775-12-16', 'date_of_death' => '1817-07-18'],
            ['full_name' => 'Charles Dickens', 'date_of_birth' => '1812-02-07', 'date_of_death' => '1870-06-09'],
            ['full_name' => 'William Shakespeare', 'date_of_birth' => '1564-04-23', 'date_of_death' => '1616-04-23'],
            ['full_name' => 'Emily Brontë', 'date_of_birth' => '1818-07-30', 'date_of_death' => '1848-12-19'],
            ['full_name' => 'Mark Twain', 'date_of_birth' => '1835-11-30', 'date_of_death' => '1910-04-21'],
            ['full_name' => 'Agatha Christie', 'date_of_birth' => '1890-09-15', 'date_of_death' => '1976-01-12'],
            ['full_name' => 'F. Scott Fitzgerald', 'date_of_birth' => '1896-09-24', 'date_of_death' => '1940-12-21'],
            ['full_name' => 'Gabriel García Márquez', 'date_of_birth' => '1927-03-06', 'date_of_death' => '2014-04-17'],
            ['full_name' => 'J.K. Rowling', 'date_of_birth' => '1965-07-31', 'date_of_death' => null],
            ['full_name' => 'George Orwell', 'date_of_birth' => '1903-06-25', 'date_of_death' => '1950-01-21'],
            ['full_name' => 'Harper Lee', 'date_of_birth' => '1926-04-28', 'date_of_death' => '2016-02-19'],
            ['full_name' => 'Leo Tolstoy', 'date_of_birth' => '1828-09-09', 'date_of_death' => '1910-11-20'],
            ['full_name' => 'J.R.R. Tolkien', 'date_of_birth' => '1892-01-03', 'date_of_death' => '1973-09-02'],
            ['full_name' => 'Virginia Woolf', 'date_of_birth' => '1882-01-25', 'date_of_death' => '1941-03-28'],
            ['full_name' => 'Ernest Hemingway', 'date_of_birth' => '1899-07-21', 'date_of_death' => '1961-07-02'],
            ['full_name' => 'Charlotte Brontë', 'date_of_birth' => '1816-04-21', 'date_of_death' => '1855-03-31'],
            ['full_name' => 'Ray Bradbury', 'date_of_birth' => '1920-08-22', 'date_of_death' => '2012-06-05'],
            ['full_name' => 'H.G. Wells', 'date_of_birth' => '1866-09-21', 'date_of_death' => '1946-08-13'],
            ['full_name' => 'Aldous Huxley', 'date_of_birth' => '1894-07-26', 'date_of_death' => '1963-11-22'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
