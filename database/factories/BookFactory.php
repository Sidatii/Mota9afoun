<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => fake()->name(),
            'image' => fake()->image(),
            'author' => fake()->name(),
            'published' => fake()->year(),
            'description' => fake()->paragraph(5),
            'tags' => 'Politics, Society, Future'
        ];
    }
}
