<?php

namespace Database\Seeders;

use App\Models\Blogs\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Development', 'Updates', 'Email Marketing', 'Rate Optimization'];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category,
                'slug' => strtolower($category),
            ]);
        }
    }
}
