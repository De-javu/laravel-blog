<?php

namespace Database\Seeders;
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSedders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $post = new Post();

         $post->title = 'Post 1';
         $post->content = 'Content 1';
         $post->category = 'Category 1';
         $post->published_at = now();
         $post->save();

         $post = new Post();
         
       Post::factory(15000)->create();
    }
}
