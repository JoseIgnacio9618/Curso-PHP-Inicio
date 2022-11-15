<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>"Aqui podras crear tu curso"</h1>

    <form action="{{route('cursos.añadir')}}" method="post">

        @csrf

    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Descripción:
        <textarea type="text" name="description" rows="5" value="{{old('description')}}"></textarea>
    </label>

    @error('description')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Categoria:
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>

    @error('categoria')
        <br>
        <small>{{$message}}</small>
        <br>
    @enderror

    <input type="submit" value="Enviar curso">

    </form>
</body>
</html>