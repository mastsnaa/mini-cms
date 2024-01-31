<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $image = "post_image_" . rand(1, 5) . ".jpg";
        return [
            'title' => fake()->sentence(rand(5 , 10)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->text(rand(100, 300)),
            'body' => fake()->paragraphs(rand(7, 10), true),
            'image' => rand(0, 1) == 1 ? $image : null,
            'author_id' => rand(1, 3),
        ];
    }
}
