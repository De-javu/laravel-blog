<x-app-layout>
    @if($posts->isEmpty())
                        <p>No hay posts disponibles.</p>
                    @else
                        <ul class="text-red-500">
                            @foreach($posts as $post)
                                <li>{{ $post->title}}</li>                                 
                            @endforeach
                        </ul>
                    @endif
</x-app-layout>