<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(4, true),
            'image' => fake()->imageUrl(),
            'content' => fake()->sentences(5, true),
            // 'content'=>fake()->paragraph(5 , true),
            // 'content'=>fake()->text(),
            'user_id' => fake()->numberBetween(1, 10),

        ];
    }
}
