@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('body')

    <h1>Estás apunto de eliminar el curso {{$curso->name}}</h1>

    <p><strong>Categoría:</strong>{{$curso->categoria}}</p>
    <p><strong>Descripción:</strong>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.confirmDelete', $curso)}}" method="POST">
        @csrf
        @method('delete')

        <button type="submit">Eliminar curso</button>
    </form>

    <a href="{{route('cursos.index')}}">Volver a la lista de cursos</a>
    <br>

@endsection
