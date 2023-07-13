<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Rating;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'  => $this->faker->catchPhrase,
            'price' => $this->faker->randomFloat(2, 20, 300),
            'author' => $this->faker->name,
            'editor'=> $this->faker->company,
            'year_published' => $this->faker->year()
        ];
    }

    // public function configure()
    // {
    //     return $this->afterCreating(function (Book $book) {
    //         $book->id = Rating::factory()->create([
    //             'book_id' => $book->id
    //         ]);
    //         $book->save();
    //     });
    // }

}
