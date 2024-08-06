<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("register.authenticate")}}" method="post">
        @csrf

        <label>
            Ingrese su nombre de usuario</label>
            <input type="text" placeholder="Usuario" name='name'>

        <label>
            Ingrese su Correo</label>
            <input type="text" placeholder="Correo" name="email">

        <label>
            Ingrese la contrasena</label>
            <input type="password" placeholder="Contrasena" name="password">
        <button>Registrar</button>
        <a href="{{route("index")}}">Volver</a>
    </form>

</body>
</html>