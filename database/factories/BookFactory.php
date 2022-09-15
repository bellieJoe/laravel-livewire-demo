<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $author_ids = Author::query()->pluck('author_id');
        return [
            'author_id' => $this->faker->randomElement($author_ids),
            'book_title' => Str::title($this->faker->words(2, true)),
            'date_published' => $this->faker->date()
        ];
    }
}
