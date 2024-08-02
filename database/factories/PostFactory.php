<?php

namespace Database\Factories;
use Illuminate\Support\Str;
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
    public function definition(): array
    {
        $post = fake()->sentence(3);
        $postSlug = Str::slug($post,"-");
        return [
            'title' => $post,
            'slug' => $postSlug,
            'description' => fake()->paragraph(),
            "user_id" => fake()->numberBetween(1, 4)
        ];
    }
}
