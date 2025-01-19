<!-- resources/views/posts/create.blade.php -->
<x-app-layout>
    
                    <h1>Crear Nuevo Post</h1>
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div>
                            <label for="title">Título</label>
                            <input type="text" id="title" name="title" required>
                        </div>
                        <div>
                            <label for="content">Contenido</label>
                            <textarea id="content" name="content" required></textarea>
                        </div>
                        <button type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>