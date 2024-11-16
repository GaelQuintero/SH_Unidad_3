@extends('layouts/main')
@section('titulo_pagina', 'Registro de usuario')

@section('contenido')

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CDN SweetAlert2 -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body class="bg-white">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Formulario de inicio de sesión -->
        <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <form action="{{ route('registrar-empleado') }}" method="POST"
                        class="form-control p-4 border border-0  border-opacity-10 rounded-3">
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
                            <button type="submit" class="btn btn-primary btn-lg rounded-5 w-100">Register <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                </svg></button>
                            <a class="btn btn-link w-100 text-center mt-3 link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('login-empleado') }}" role="button">
                               <h6>Already have an account? Sign in</h6>
                            </a>
                        </div>



                    </form>
                </div>
            </div>
        </div>
        <!-- Fin del formulario -->

        <!-- Footer -->
        <footer class=" navbar fixed-bottom" style="background-color: #ffffff;">
            <div class="container-fluid justify-content-center ">
                <h6>©2024 PPC Software</h6>
            </div>
        </footer>
    </body>

    </html>

@endsection
