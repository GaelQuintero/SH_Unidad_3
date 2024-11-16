<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index (){
        return view("modules/auth/login-empleado");
    }

    public function registroEmpleado (){
        return view("modules/auth/registro-empleado");
    }

    public function registrarEmpleado(Request $request) {
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();

        return redirect()->route('login-empleado')->with('success', 'Te has registrado correctamente');
    }

    public function login(Request $request){
       $credenciales = [
           'email' => $request->email,
           'password' => $request->password
       ];

       if (Auth::attempt($credenciales)) {
        return redirect()->route('dashboard')->with('success', 'Haz iniciado sesión correctamente');
       } else{
        return redirect()->route('login-empleado')->with('error', 'Verifique sus datos');
       }
    }

    public function dashboard (){
        return view("modules/home/dashboard");
    }


}

