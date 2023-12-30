<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Badiiy adabiyotlar',
            'Biografik va memuar',
            'Biznes adabiyotlar',
            'Bola tarbiyasiga oid kitoblar',
            'Bolalar adabiyoti',
            'Bolalar ensiklopediyasi',
            'Detektiv adabiyotlar',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
