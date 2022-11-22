@extends('layouts.plantilla')
@section('title',$curso->name)
     
  

 @section('content')

 <h1>Este es el curso: {{$curso->name}}</h1>
<br>

<h3>Descripcion: {{$curso->description}} </h3>
<br>
<br>
 <h3>Categoria: {{$curso->categoria}}</h3>
 <a href="{{route('editarCurso',$curso->id)}}">Editar Curso</a>
 
 <a href="{{route('cursos')}}">Volver a cursos</a>

<form action="{{route('eliminarCurso',$curso->id)}}" method="POST">
@csrf
@method('delete')
<button type="submit">Eliminar curso</button>
</form>
 @endsection  

