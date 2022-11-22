<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\mensajeContacto;
use Doctrine\DBAL\Schema\View;

class controladorNavegacion extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function formacion(){
        return view('Formacion');
    }

    public function destrezas(){
        return view('Destrezas');
    }

    public function proyectos(){
        return view('Proyectos');
    }

    public function sobremi(){
        return view('sobremi');
    }

    public function contacto(){
        return view('Contacto');
    }

    public function mensaje(Request $request){

        $mensaje = new mensajeContacto;

        $mensaje->name = $request->name;
        $mensaje->apellidos = $request->apellidos;
        $mensaje->email = $request->email;
        $mensaje->mensaje = $request->mensaje;

        $mensaje->save();




        return view('Inicio');

    }


}
