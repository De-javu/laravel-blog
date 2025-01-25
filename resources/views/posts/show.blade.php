

<a href="/posts">Volver</a>

<div class="text-red-500"> 
<h1>TITULO: {{$post->title}} </h1>
<p>Slug: {{$post->slug}}</p>
<p>CONTENIDO: {{$post->content}} </p>
</div>


<a href="{{route('posts.edit',$post->slug)}}">editar</a>
<br>


<form method="POST" action="{{route('posts.destroy', $post->slug)}}">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
