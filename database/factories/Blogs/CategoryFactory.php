<?php

namespace Database\Factories\Blogs;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blogs\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'slug' => $this->faker->slug,
        ];
    }
}
