<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('home')}}" method="GET">
        <button type="submit">Volver</button>
    </form>

    <container>
    <h1>Titulo:{{ $post->title}}</h1>
    <p>Contenido: {{$post->content}}</p>
    <p>Categoria: {{$post->category}}</p>
    <p>Tags: {{$post->tags}}</p>
    <p>Author: {{$post->author}}</p>
    <div>
        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" width="100">
    </div>
    </container>

    <form action="{{route('home.edit', $post->id)}}" method="GET">
        <button type="submit">Editar</button>
    </form>

</body>
</html>