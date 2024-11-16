@extends('layouts/main')

@section ('titulo_pagina', 'Dashboard')


@section ('contenido')

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
    @if (session('success-login'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Excelente!',
            text: '{{ session('success-login') }}',
            showConfirmButton: false,
            timer: 1800
        });
    </script>
@endif
    <nav class="navbar bg-primary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <!-- Bienvenida -->
            <span class="navbar-text text-white">
                Bienvenido {{ Auth::user()->name }}
            </span>

            <!-- Cerrar sesión -->
            <form action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link text-white text-decoration-none">
                    Cerrar sesión
                </button>
            </form>
        </div>
    </nav>


    <!-- Footer -->
    <footer class=" navbar fixed-bottom" style="background-color: #ffffff;">
        <div class="container-fluid justify-content-center ">
            <h6>©2024 PPC Software</h6>
        </div>
    </footer>
</body>

</html>
@endsection
