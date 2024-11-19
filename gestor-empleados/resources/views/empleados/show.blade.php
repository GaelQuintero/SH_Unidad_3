@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Empleado</h1>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $empleado->idEmpleado }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $empleado->Nombre }}</td>
        </tr>
        <tr>
            <th>Apellido:</th>
            <td>{{ $empleado->Apellido }}</td>
        </tr>
        <tr>
            <th>Número de Empleado:</th>
            <td>{{ $empleado->NumeroEmpleado }}</td>
        </tr>
        <tr>
            <th>Fecha Registrado:</th>
            <td>{{ $empleado->FechaRegistrado }}</td>
        </tr>
    </table>

    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Regresar</a>
    <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este empleado?')">Eliminar</button>
    </form>
</div>
@endsection