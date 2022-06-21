@extends('layouts.plantilla')
@section('title','Curso create')
@section('body')
    <h1>En esta página podrás crear tus cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" placeholder="Escribe aquí el nombre del curso" size="40%">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Crear curso</button>
    </form>
@endsection

