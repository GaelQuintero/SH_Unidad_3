@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ old('Nombre', $empleado->Nombre) }}" required>
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido" value="{{ old('Apellido', $empleado->Apellido) }}" required>
        </div>
        <div class="mb-3">
            <label for="NumeroEmpleado" class="form-label">Número de Empleado</label>
            <input type="text" class="form-control" id="NumeroEmpleado" name="NumeroEmpleado" value="{{ old('NumeroEmpleado', $empleado->NumeroEmpleado) }}" required>
        </div>
        <div class="mb-3">
            <label for="FechaRegistrado" class="form-label">Fecha Registrado</label>
            <input type="datetime-local" class="form-control" id="FechaRegistrado" name="FechaRegistrado" 
            value="{{ old('FechaRegistrado', $empleado->FechaRegistrado ? $empleado->FechaRegistrado->format('Y-m-d\TH:i') : '') }}">
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
