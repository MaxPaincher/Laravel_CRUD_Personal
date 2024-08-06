<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('home.show')}}" method="get">
        <button>Volver</button>
    </form>

    <form action="{{route('home.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>
        @error('title')
            <p>
                {{$message}}
            <p>
        @enderror

        <label>
            slug:
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
            @error('slug')
            <p>
                {{$message}}
            <p>
        @enderror
            <br>
            <br>

            <label>
                Contenido: 
            <textarea name="content">{{old('content',$post->content)}}</textarea>
            </label>
            @error('content')
            <p>
                {{$message}}
            <p>
        @enderror
            <br>
            <br>

            {{-- <label>
                Imagen: 
            <textarea name="content">{{old('content')}}</textarea>
            </label>
            @error('content')
            <p>
                {{$message}}
            <p>
        @enderror
            <br>
            <br> --}}

            <label>
                Categoria:
                <input type="text" name="category" value="{{old('category', $post->category)}}">
                @error('category')
                <p>
                    {{$message}}
                <p>
            @enderror
                <br>
                <br>
                <label>

            <label>
                Tags: 
            <textarea name="tags">{{old('tags', $post->tags)}}</textarea>
            </label>
            @error('tags')
            <p>
                {{$message}}
            <p>
        @enderror
            <br>
            <br>

            <label>
                Autor:
                <input type="text" name="author" value="{{old('author', $post->author)}}">
                @error('author')
                <p>
                    {{$message}}
                <p>
            @enderror
                <br>
                <br>
                
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" width="100">

                <input type="file" name="image" accept="image/*">

            <button type="submit"> Actualizar Post </button>
        </form>
</body>
</html>