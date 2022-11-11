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

    public function mostrar(){

        return view("cursos.mostrarcurso");
    }
}
