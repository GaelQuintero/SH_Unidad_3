@extends('layouts/main')

@section('titulo_pagina', 'Log in to the Dashboard')

@section('contenido')
    <!-- Formulario de inicio de sesión -->
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <form action="" method="POST"
                    class="form-control p-4 border border-primary  border-opacity-10 rounded-3 shadow-sm">
                    <div class="mb-3">

                          <!-- Imagen arriba del formulario -->
                <div class="text-center mb-4">
                    <img src="{{ asset('img/users-group.jpeg') }}" alt="loginEmpleado" class="img-fluid">
                </div>
                        <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <!-- Aqui ira la api de Captcha
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                -->
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary w-100">Log</button>
                    <a class="btn btn-link w-100 text-center mt-3 link-offset-2 link-underline link-underline-opacity-0"
                       href="{{ route('registro-empleado') }}" role="button">
                       Don't have an account? Register here
                    </a>
                </div>



                </form>
            </div>
        </div>
    </div>
    <!-- Fin del formulario -->
@endsection
