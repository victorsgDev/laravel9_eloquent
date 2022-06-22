<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //$cursos=Curso::all();
        $cursos=Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function show(Curso $curso){
        return view('cursos.show', compact('curso') );  // compact() = ['curso' => $curso]
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        $curso=Curso::create($request->all());
        return redirect()->route('cursos.show',$curso);
    }
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $curso=Curso::update($request->all());
        return redirect()->route('cursos.show',$curso->id);
    }


    public function delete(Curso $curso){
        return view('cursos.delete', compact('curso'));
    }
    public function confirmDelete(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }


} // end class
