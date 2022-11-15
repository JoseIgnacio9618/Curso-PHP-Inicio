<?php

namespace App\Http\Controllers;
use App\Models\curso;

use Illuminate\Http\Request;

use App\Http\Requests\anadirCurso;


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


    public function añadirCurso(anadirCurso $request){

        
        
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

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required|min:3' ,
            'description'=>'required',
            'categoria'=>'required',
        ]);

        $curso = curso::find($id);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('mostrarCurso', $curso->id);
}
}
