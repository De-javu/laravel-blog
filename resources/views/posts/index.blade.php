
<x-app-layout>
<a  class="text-blue-500"
 href="{{route('posts.create')}}">Crear nuevo post
 </a>
    @if($posts->isEmpty())
        <p>No hay posts disponibles.</p>
    @else
        <ul class="text-red-500">
            @foreach($posts as $post)
                <li>
                    <a href="/posts/{{$post->id}}">
                    {{ $post->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    {{ $posts->links() }}
</x-app-layout>