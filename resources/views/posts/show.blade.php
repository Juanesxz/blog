<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAVAVEL | show</title>
</head>
<body>

    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>ID:</strong> {{ $post['id'] }}<br>
                <strong>Name:</strong> {{ $post['name'] }}<br>
                <strong>Username:</strong> {{ $post['username'] }}<br>
                <strong>Email:</strong> {{ $post['email'] }}<br>
                <br>
            </li>
        @endforeach
    </ul>

  
</body>
</html>