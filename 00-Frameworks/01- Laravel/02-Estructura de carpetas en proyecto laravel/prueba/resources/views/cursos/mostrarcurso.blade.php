@extends('layouts.plantilla')
@section('title',$curso->name)
     
  

 @section('content')
 <h1>Este es el curso: {{$curso->name}}</h1>
<br>
<br>
<br>
 <h3>Categoria: {{$curso->categoria}}</h3>
 <a href="{{route('editarCurso',$curso->id)}}">Editar Curso</a>
 <a href="{{route('cursos')}}">Volver a cursos</a>
 @endsection   
