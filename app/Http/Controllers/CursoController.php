<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la página cursos";
    }

    public function create(){
        return "En esta página podrás crear tus cursos";
    }
    public function show($categoria,$curso){
        if ($categoria){
            return "Bienvenido al curso $curso de la categoría $categoria";
        }
        else{
            return "Bienvenido al curso $curso";
        }
    }

} // end class
