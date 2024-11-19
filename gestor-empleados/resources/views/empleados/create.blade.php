@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido" required>
        </div>
        <div class="mb-3">
            <label for="NumeroEmpleado" class="form-label">Número de Empleado</label>
            <input type="text" class="form-control" id="NumeroEmpleado" name="NumeroEmpleado" required>
        </div>
        <div class="mb-3">
            <label for="FechaRegistrado" class="form-label">Fecha Registrado</label>
            <input type="datetime-local" class="form-control" id="FechaRegistrado" name="FechaRegistrado">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
