<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviewTexts = [
            "A captivating read! I couldn't put it down.",
            "The plot twists kept me on the edge of my seat.",
            "Beautifully written. Highly recommended.",
            "An emotional rollercoaster. I laughed and cried.",
            "The characters were so well-developed. I felt connected to them.",
            "A thought-provoking story that lingers in the mind.",
            "Masterfully crafted. Each chapter left me wanting more.",
            "A must-read for anyone who loves a good mystery.",
            "The prose is poetic, creating a vivid and immersive experience.",
            "The themes explored are both timely and timeless.",
            "I found myself quoting passages to friends. Truly memorable.",
            "This book challenged my perspective in unexpected ways.",
            "The author's voice is unique and refreshing.",
            "A modern classic in the making. It will be remembered for years to come.",
            "I couldn't predict the ending. It kept me guessing until the last page.",
        ];
        $users = User::all();
            for ($i = 1; $i <= 23; $i++) {
                Review::create([
                    'book_id' => $i,
                    'user_id' => rand(1,5),
                    'review_text' => $this->getRandomReviewText($reviewTexts),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
        }
    }
    private function getRandomReviewText(array $reviewTexts)
    {
        return $reviewTexts[array_rand($reviewTexts)];
    }
}
