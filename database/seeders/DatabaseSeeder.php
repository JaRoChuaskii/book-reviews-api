<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Rating;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory()->times(20)->create()->each(
            function ($book) {
                Rating::factory()->times(5)->create([
                    'book_id' => $book->id
                ]);
            }
        );
    }
}
