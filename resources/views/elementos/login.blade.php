<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesion</title>
</head>
<body>
    
    <form action="{{route("index.authenticate")}}" method="post">
        @csrf
<div>
 
        <ul>
            @foreach ($errors->all() as $error )
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
        <label>
            Ingrese su correo</label>
            <input type="text" placeholder="Correo">

        <label>
            Ingrese la contrasena</label>
            <input type="password" placeholder="Contrasena">
        <button>Ingresar</button>

    </form>
    <a href="{{route("register")}}">Registrarse</a>

</body>
</html>