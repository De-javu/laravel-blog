<!-- resources/views/posts/create.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-red-500">
                    <h1>Crear Nuevo Post</h1>
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
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

                        <div>
                            <label for="title">Título</label>
                            <input type="text" id="title" name="title" value="{{old('title')}}">

                            {{-- Esta es otra forma de validar errores, dejamos el eejmplo aca  --}}
                            @error('title')
                                <p><strong>{{$message}}</strong></p>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label>
                                Slug:
                                <input type="text" name="slug" value="{{old('slug')}}">
                            </label>

                              @error('slug')
                                <p><strong>{{$message}}</strong></p>
                            @enderror
                        </div>

                         <div>
                            <label>
                                Categoria:
                                <input type="text" name="category" value="{{old('category')}}">
                            </label>
                  
                        </div>
                        
                        <br>
                        <div>
                            <label for="content">Contenido</label>
                            <textarea id="content" name="content" {{old('content')}}></textarea>
                        </div>

                       
                        <button type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>