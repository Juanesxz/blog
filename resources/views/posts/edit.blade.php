<x-app-layout>
    <h1>Formulario para editar un nuevo post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf


        @method('PUT')

        <div>
            <label for="title"> Título</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        </div>
        <div>
            <label for="category"> Categoría</label>
            <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}">
        </div>
        <div>
            <label for="content"> Contenido</label>
            <textarea name="content" id="content" cols="30" rows="10"> {{ old('content', $post->content) }}</textarea>
        </div>
        <div>
            <label for="slug">slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
        </div>
        <button type="submit">Actualizar post</button>


    </form>
</x-app-layout>
