<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Blog de cursos</h1>
<br>
<br>
<br>
    <ul>
        <li>
            <a href="{{route("index")}}"> Home</a>
        </li>
        <li>
            <a href="{{route("cursos")}}"> Cursos</a>
        </li>

        <li>
            <a href="{{route("contacto")}}"> Contacto</a>
        </li>
       
    </ul>
<br>
<br>
<br>
    <h1>@yield('content')</h1>

</body>
</html>