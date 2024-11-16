@extends('layouts/main')
@section('titulo_pagina', 'Registro de usuario')

@section('contenido')

    <body class="bg-white">
        <!-- Formulario de inicio de sesión -->
        <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <form action="{{ route('registrar-empleado') }}" method="POST"
                        class="form-control p-4 border border-0  border-opacity-10 rounded-3 shadow-sm">
                        @csrf
                        @method('POST')
                        <div class="mb-3">

                            <!-- Imagen arriba del formulario -->
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/users-group.jpeg') }}" alt="loginEmpleado" class="img-fluid"
                                    width="60px">
                            </div>

                            <input type="text" placeholder="Name" name="name"
                                class="form-control form-control-lg rounded-0" id="name" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Email" name="email"
                                class="form-control form-control-lg rounded-0" id="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Password" name="password"
                                class="form-control form-control-lg rounded-0" id="password">
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg rounded-5 w-100">Register</button>
                            <a class="btn btn-link w-100 text-center mt-3 link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('login-empleado') }}" role="button">
                                Already have an account? Sign in
                            </a>
                        </div>



                    </form>
                </div>
            </div>
        </div>
        <!-- Fin del formulario -->
    </body>
@endsection
