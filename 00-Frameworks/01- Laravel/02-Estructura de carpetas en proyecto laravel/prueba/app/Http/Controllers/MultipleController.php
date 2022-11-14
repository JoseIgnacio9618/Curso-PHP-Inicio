<?php

namespace App\Http\Controllers;
use App\Models\curso;

use Illuminate\Http\Request;

class MultipleController extends Controller
{
 
    public function index(){
        return view("cursos.index");

    }

    public function Cursos(){

        $cursos = curso::paginate();
        
        return view("cursos.Cursos", compact('cursos'));

    }

    public function create(){

        return view("cursos.create");
    }

    public function mostrar($id){

        $curso = curso::find($id);
        
        return view("cursos.mostrarcurso",compact('curso'));
    }


    public function añadirCurso(Request $request){

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();


        return redirect()->route('mostrarCurso', $curso->id);
    }

    public function editar($id){

        $curso = curso::find($id);

        return view("cursos.editarCurso",compact('curso'));
    }
}
