<!-- resources/views/posts/create.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>QUE DESEAS EDITAR?</h1>
                    <form method="POST" action="{{ route('posts.update', [$post->slug]) }}">
                        @csrf
                        @method('PUT')

                         <!-- validador de errores que llegan por formulario -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        @endif

                        <div class="text-red-500">
                        <div >
                            <label for="title">Título</label>
                            <input type="text" id="title" name="title" value="{{old('title', $post->title)}}"
                            required autofocus autocomplete="title">
                         
                        </div>
                        <br>

                        <div>
                            <label>
                                Slug:
                                <input type="text" name="slug" value="{{old('name',$post->slug)}}"
                                required autofocus autocomplete="slug">
                            </label>
                        </div>
                        <br>
                        <div>
                            <label>
                                Categoria:
                                <input type="text" name="category" value="{{old('name',$post->category)}}"
                                required autofocus autocomplete="category">
                            </label>
                        </div>
                        <br>
                        <div>
                            <label for="content">Contenido</label>
                             <textarea id="content" name="content" required autofocus autocomplete="content">
                              {{old('name', $post->content)}}"
                             </textarea>
                        </div>

                        </div>
                        <button type="submit">Actualiza la informacion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>