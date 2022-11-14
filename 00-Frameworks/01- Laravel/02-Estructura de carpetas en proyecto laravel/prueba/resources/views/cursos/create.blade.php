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
        <input type="text" name="name" >
    </label>
    <br>
    <label>
        Descripción:
        <textarea type="text" name="descriptión" rows="5"></textarea>
    </label>
    <br>
    <label>
        Categoria:
        <input type="text" name="categoria" >
    </label>

            <input type="submit" value="Enviar curso">

    </form>
</body>
</html>