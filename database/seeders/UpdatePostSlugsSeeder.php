<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdatePostSlugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // obtener todos los post existentes
        $posts = Post::all();

        //Actualizar solo la columna slug utilizando el factory
        $posts->each(function ($post) {
            $post->slug = Post::factory()->make()->slug;
            $post->save();
        });
    }
}
