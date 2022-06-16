<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){     // solo administra una ruta
        return "Bienvenido a mi página principal";
    }


}// end class

