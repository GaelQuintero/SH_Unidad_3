@extends('layouts/main')

@section('titulo_pagina', 'Log in to the Dashboard')

@section('contenido')

    <body class="bg-white">
        <!-- Formulario de inicio de sesión -->
        <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center ">
            <div class="row w-100 justify-content-center border-0">
                <div class="col-12 col-md-6 col-lg-4">
                    <form action="" method="POST" class="form-control p-4 border border-0 rounded-3 shadow-sm">
                        <div class="mb-3">

                            <!-- Imagen arriba del formulario -->
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/users-group.jpeg') }}" alt="loginEmpleado" class="img-fluid "
                                    width="60px">
                            </div>
                            <input type="email" placeholder="Email address" name="email"
                                class="form-control form-control-lg rounded-0" id="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text text-primary">We'll never share your email with anyone
                                else.</div>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Password" name="password"
                                class="form-control form-control-lg rounded-0" id="password">
                        </div>
                        <!-- Aqui ira la api de Captcha
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    -->
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-5">Log</button>
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
    </body>
@endsection
