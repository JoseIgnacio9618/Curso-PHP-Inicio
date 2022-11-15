<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos edit</title>
</head>
<body>
    

    <h1>"Aqui podras editar un curso"</h1>

    <form action="{{route('actualizarCurso',$curso->id)}}" method="post">

        @csrf

        @method('put')
        
    <label>
        Nombre:
        <input type="text" name="name" value="{{$curso->name}}" >
    </label>
    <br>
    <label>
        Descripción:
        <textarea type="text" name="description" rows="5" >{{$curso->description}}</textarea>
    </label>
    <br>
    <label>
        Categoria:
        <input type="text" name="categoria" value="{{$curso->categoria}}" >
    </label>

    <input type="submit" value="Modificar curso">

</body>
</html>