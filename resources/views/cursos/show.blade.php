@extends('layouts.plantilla')

@section('title','Curso '.$curso)

@section('body')
    <!--<h1>Bienvenido al curso <?php //echo $curso; ?> </h1>-->
    <h1>Bienvenido al curso {{$curso}}</h1> <!-- = print $curso-->
@endsection

