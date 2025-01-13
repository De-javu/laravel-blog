<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
});

Route::get('/home', [HomeController::class,'index'])->name('home');

Route:: get('/posts', [PostsController::class,'index'])->name('posts.index');
Route:: get('/posts/create', [PostsController::class,'create'])->name('posts.create');
Route:: get('/posts/{posts}/{category?}', [PostsController::class,'posts'])->name('posts');

// INSERCION DE DATOS DESDE EL ORM ELOQUENT
    route::get('prueba', function(){
    //   $post = new Post();
    //   $post->title = 'MI MI PRIMER POST 2';
    //   $post->content = 'Contenido de mi primer post 2';
    //   $post->category= 'Categoria de prueba 2' ;
    //   $post->save();

    //   return $post;


// INSERCION DE DATOS DESDE SQL EN LARAVEL 
 //Route::get('prueba', function(){
//     DB::insert('INSERT INTO post (title, content, category, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())', [
//         'Mi primer post 6',
//         'Contenido de mi primer post 6',
//         'Categoria de prueba 6'
//     ]);

//     return 'Post creado';

//  Recuperacion de un resgistro por id
 $post = Post::find(3);

  return $post->published_at->format('d-m-Y');

// Recuperacion de un registro por titulo y id para su mosdificacion 
// $post = Post::where('title', 'Mi primer post 10')->find(8);

// $post->title = 'Mi primer post 8';
// $post->content = 'Programador web';
// $post->category = 'Laravel 11';
// $post->save();

// return $post;


// Busqueda filtrada por id y oprador de comparacion
// $post = POST::WHERE('id', '>','5')->get();
// return $post;


// Eliminacion de un registro por id
// $post = POST::find(10);
// $post->delete();
// return 'Post eliminado';


});







