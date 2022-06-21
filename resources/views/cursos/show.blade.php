@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('body')
    <!--<h1>Bienvenido al curso <?php //echo $curso; ?> </h1>-->
    <h1>Bienvenido al curso {{$curso->name}}</h1> <!-- = print $curso-->
    <a href="{{route('cursos.index')}}">Volver a la lista de cursos</a>
    <br>
    <a href="{{route('cursos.delete',$curso->id)}}">Eliminar Curso</a>
    <br>
    <a href="{{route('cursos.edit',$curso->id)}}">Editar curso</a>


    <p><strong>Categoría:</strong>{{$curso->categoria}}</p>
    <p><strong>Descripción:</strong>{{$curso->descripcion}}</p>
@endsection

