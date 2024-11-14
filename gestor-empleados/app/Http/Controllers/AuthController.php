<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index (){
        return view("modules/auth/login-empleado");
    }

    public function registroEmpleado (){
        return view("modules/auth/registro-empleado");
    }
}

