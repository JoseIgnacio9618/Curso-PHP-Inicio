<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <H1>"Bienvenido a la pagina principal de cursos"</H1>
    <br>
    <a href="{{route("crearCurso")}}">Crea tu curso</a>
    <br><br>

    <ul>

  
    @foreach ($cursos as $curso) 
       <li> 
        <a href="{{route('mostrarCurso', $curso->id)}}"> {{$curso->name}} </a>
        </li>
        
    
    @endforeach
    {{$cursos->links()}}
    </ul>


    
</body>
</html>