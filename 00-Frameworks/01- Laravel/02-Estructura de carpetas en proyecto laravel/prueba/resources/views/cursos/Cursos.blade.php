@extends('layouts.plantilla')

@section('title',"Home")

@section('content')

    <H1>"Bienvenido a la pagina principal de cursos"</H1>
    <br>
    <a href="{{route("crearCurso")}}">Crea tu curso</a>
    <br><br>

    <ul>

  
    @foreach ($cursos as $curso) 
        <li> 
        <a href="{{route('mostrarCurso',$curso)}}"> {{$curso->name}} </a>
        <br>
        </li>
        
    
    @endforeach
    {{$cursos->links()}}
    </ul>


    
    @endsection