<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::truncate();

        for ($i = 0; $i < 200; $i++) {
            $author = User::inRandomOrder()->first()->name;
            $articleId = rand(1, 50);
            Comment::create([
                'fio' => $author,
                'text' => fake()->paragraph(),
                'article_id' => $articleId,
            ]);
        }
    }
}
