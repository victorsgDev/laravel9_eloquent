@extends('layouts.plantilla')
@section('title','index')
@section('body')
    <h1>Bienvenido a la página cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach($cursos as $curso)
            <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
            <li></li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection

