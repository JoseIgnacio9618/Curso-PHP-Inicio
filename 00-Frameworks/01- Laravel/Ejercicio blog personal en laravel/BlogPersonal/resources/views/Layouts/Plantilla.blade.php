<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <script src="{{asset('jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset('Scriptscurriculum.js') }}"></script>
    <script>

    </script>
</head>
<body>


    <header>

        <h1>José Ignacio Pardo Pérez</h1>
        <h2>Desarrollador web</h2>


    

    <ol >
        <li id="lista1"> <a href="{{route('inicio')}}">Inicio</a> </li>
        <li id="lista1"> <a href="{{route('formacion')}}">Formación</a>  </li>
        <li id="lista1"> <a href="{{route('destrezas')}}">Destrezas</a>  </li>
        <li id="lista1"> <a href="{{route('proyectos')}}">Proyectos</a>  </li>
        <li id="lista1"> <a href="{{route('sobremi')}}">Sobre mi</a>   </li>
        <li id="lista1"> <a href="{{route('contacto')}}">Contacto</a>   </li>

    </ol>

</header>
    

@yield('content')


    <footer>
        <p id="foter">José Ignacio Pardo Pérez, 2022.</p>
    </footer>


</body>
</html>