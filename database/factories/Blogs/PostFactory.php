<?php

namespace Database\Factories\Blogs;

use App\Models\User;
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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraph,
            'imagePath' => $this->faker->imageUrl(),
            'thumbnailPath' => $this->faker->imageUrl(),
            'publishedAt' => $this->faker->dateTime,
            'category_id' => 1,
            'user_id' => User::factory(),
        ];
    }
}
