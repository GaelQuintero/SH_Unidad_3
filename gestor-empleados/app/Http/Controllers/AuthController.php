<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;



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

    public function login(Request $request)
    {
        // Verificar la respuesta del reCAPTCHA
        $recaptchaSecret = env('6LeAzYAqAAAAAMqj-5Q8uzknFFKug2E0fiONBhmM'); // Asegúrate de almacenar la clave secreta correctamente en .env
        $recaptchaResponse = $request->input('g-recaptcha-response');

        // Hacer la solicitud a Google para verificar el reCAPTCHA
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
        ]);

        // Obtener el cuerpo de la respuesta
        $responseBody = $response->json();

        // Si el reCAPTCHA no es válido, retornar con error
        if (!$responseBody['success']) {
            return redirect()->route('login-empleado')->withErrors(['captcha' => 'Verificación reCAPTCHA fallida.']);
        }

        // Si la verificación del reCAPTCHA es exitosa, proceder con la autenticación
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credenciales)) {
            return redirect()->route('dashboard')->with('success-login', 'Ha iniciado sesión con éxito');
        } else {
            return redirect()->route('login-empleado')->with('error', 'Verifique sus datos');
        }
    }


    public function logout(){
       Session::flush();
       Auth::logout();
       return redirect()->route('login-empleado')->with('success-logout', 'La sesión se ha cerrado correctamente');
    }

    public function dashboard (){
        return view("modules/home/dashboard");
    }


}

