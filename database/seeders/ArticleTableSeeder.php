<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::truncate();

        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'name' => fake()->sentence(3),
                'price' => fake()->randomFloat(2, 10, 100),
                'description' => fake()->paragraphs(5, true),
            ]);
        }
    }
}
