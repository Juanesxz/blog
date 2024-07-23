<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL | create</title>
</head>

<body>


    {{ __('Client Closed Request') }}


    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{ route('posts.store') }}" method="POST">

        @csrf
        <div>
            <label for="title"> Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>


        @error('title')
            <div>
                <p>{{ $message }}</p>
            </div>
        @enderror

        <div>
            <label for="category"> Categoría</label>
            <input type="text" name="category" id="category" value="{{ old('category') }}">
        </div>


        @error('category')
            <div>
                <p>{{ $message }}</p>
            </div>
        @enderror


        <div>
            <label for="content"> Contenido</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('title') }}</textarea>
        </div>

        <div>
            <label for="slug">slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}">
        </div>


        <button type="submit">Crear</button>
    </form>
</body>

</html>
