<?php

namespace Database\Factories;

use App\Models\CommentPost;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentPostFactory extends Factory
{
    protected $model = CommentPost::class;

    public function definition(): array
    {
        return [
            'post_id'    => Post::factory()->create()->id,
            'parent_id'  => mt_rand(0,2),
            'author'     => $this->faker->word(),
            'body'       => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
