@extends('layouts.plantilla')
@section('title',$curso->name.'update')

@section('body')
    <h1>Editar Curso: {{$curso->name}}</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}" size="40%">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5" >{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Editar curso</button>
    </form>

@endsection
