<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {

        $title = fake()->sentence(6, true);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . Str::random(5),
            'content' => fake()->paragraphs(5, true),
            'cover' => fake()->optional()->imageUrl(640, 480, 'posts', true),
            'published_at' => fake()->boolean(80), // 80% будуть опубліковані
        ];

    }
}
