@extends('layouts/main')

@section('titulo_pagina', 'Log in to the Dashboard')

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
        <!-- Script para mostrar mensaje exitoso del registro del usuario -->

        @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '¡Datos erroneos!',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    @endif

    @if(session('success-logout'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Cerrando sesión!',
            text: '{{ session('success-logout') }}',
            showConfirmButton: false,
            timer: 1800
        });
    </script>
@endif


    </head>

    <body class="bg-white">

        <!-- Formulario de inicio de sesión -->
        <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center ">
            <div class="row w-100 justify-content-center border-0">
                <div class="col-12 col-md-6 col-lg-4">
                    <form action="{{ route('login') }}" method="POST" class="form-control p-4 border border-0 rounded-3 ">
                       @csrf

                       @method('POST')
                        <div class="mb-3">

                            <!-- Imagen arriba del formulario -->
                            <div class="text-center mb-4">
                                <img src="{{ asset('img/users-group.jpeg') }}" alt="loginEmpleado" class="img-fluid "
                                    width="60px">
                            </div>
                            <input type="email" placeholder="Email address" name="email"
                                class="form-control form-control-lg rounded-0" id="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text text-primary">
                                <h6>We'll never share your email with anyone
                                    else.</h6>
                            </div>
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
                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-5">Log <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                </svg> </button>
                            <a class="btn btn-link w-100 text-center mt-3 link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('registro-empleado') }}" role="button">
                                <h6> Don't have an account? Register here</h6>

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
