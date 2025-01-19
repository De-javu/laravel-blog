<!-- resources/views/posts/create.blade.php -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Crear Nuevo Post</h1>
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div>
                            <label for="title">Título</label>
                            <input type="text" id="title" name="title" required>
                        </div>
                        <br>
                        <div>
                            <label>
                                Categoria:
                                <input type="text" name="category">
                            </label>
                        </div>
                        <br>
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