<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    public function contacto(){
        return view("email.contacto");

    }
}
