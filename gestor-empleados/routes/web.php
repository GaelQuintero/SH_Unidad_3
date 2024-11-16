<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'index'])->name('login-empleado');

Route::get('/registro-empleado',[AuthController::class, 'registroEmpleado'])->name('registro-empleado');

Route::post('/registrar-empleado', [AuthController::class, 'registrarEmpleado'])->name('registrar-empleado');

Route::post('/login', [AuthController::class,'login'])->name('login');

Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
