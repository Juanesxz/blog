<x-app-layout>

    <h1>Aqui estan todos los posts</h1>
    <a href="{{ route('posts.create') }}">Nuevo post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach


        {{ $posts->links() }}

    </ul>
    </x-app->
