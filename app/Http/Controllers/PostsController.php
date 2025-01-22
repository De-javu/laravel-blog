<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    // Se crea el metodo index que se encarga de listar los post en la vista index
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    // Se crea el metodo create el cual se encarga de mostrar el formulario para crear un nuevo post
    public function create()
    {
        return view('posts.create');
    }
    // Se crea el metodo store que se encarga de recibir los datos del fomulario y guardarlos en la base de datos.
    public function store(Request $request)
    {
       $validateData = $request->validate([
           'title' => 'required|string|max:255',
           'category' => 'required|string|max:255',
           'content' => 'required|string',
       ]);

         $post = new Post();
            $post->title = $validateData['title'];
            $post->category = $validateData['category'];
            $post->content = $validateData['content'];

            $post->save();
            return redirect()->route('posts.index');
    }
    
    // Se crea el metodo show que se encarga de mostrar un post en especifico, que se pasa por parametro
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    //Se crea el metodo edit, que se encarga de traer el fomulario con la informacion del post a editar
    public function edit(Post $post)
    {
        $post = Post::find($post->id);
        return view('posts.edit',compact('post'));
    }

    //Se crea el metodo update, que se encarga de recibir y validar los datos del formulario y actualizarlos en la base de datos
    public function update(Request $request, Post $post)
    {
   
       $ValidaDate = $request->validate([
              'title' => 'required|string|max:255',
              'category' => 'required|string|max:255',
              'content' => 'required|string|max:255',
       ]);

       $post->update($ValidaDate);

       return redirect()->route('posts.index')->with('success', 'Post updated successfully');

    }

    //Se crea el metodo destroy, que se encarga de eliminar un post en especifico que se pasa por parametro
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}