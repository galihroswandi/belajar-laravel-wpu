<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2, 8),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(function ($p) {
                    return "<p>$p</p>";
                })
                ->implode(''),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 3)
        ];
    }
}