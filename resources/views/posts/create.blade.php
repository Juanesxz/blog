<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL | create</title>
</head>

<body>

    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{ route('posts.store') }}" method="POST">

        @csrf
        <div>
            <label for="title"> Título</label>
            <input type="text" name="title" id="title">
        </div>


        <div>
            <label for="category"> Categoría</label>
            <input type="text" name="category" id="category">
        </div>
        <div>
            <label for="content"> Contenido</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>


        <button type="submit">Crear</button>
    </form>
</body>

</html>
