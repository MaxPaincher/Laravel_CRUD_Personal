<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <form action="{{route('home')}}" method="GET">
        <button type="submit">Volver</button>
    </form>


    <h1> Formulario para crear Posts </h1>
    {{-- <div>
        <h2>Errores:</h2>
        <ul>
            @foreach ($errors->all() as $error )
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div> --}}

    <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title')}}">
        </label>
        @error('title')
            <p>
                {{$message}}
            <p>
        @enderror

        <label>
            slug:
            <input type="text" name="slug" value="{{old('slug')}}">
            @error('slug')
            <p>
                {{$message}}
            <p>
        @enderror
            <br>
            <br>

            <label>
                Contenido: 
            <textarea name="content">{{old('content')}}</textarea>
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
                <input type="text" name="category" value="{{old('category')}}">
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
            <textarea name="tags">{{old('tags')}}</textarea>
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
                <input type="text" name="author" value="{{old('author')}}">
                @error('author')
                <p>
                    {{$message}}
                <p>
            @enderror
                <br>
                <br>
                
                <input type="file" name="image" accept="image/*">

            <button type="submit"> Crear Post </button>
        </form>
</body>
</html>