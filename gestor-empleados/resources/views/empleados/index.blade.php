@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Empleados</h1>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary">Crear Empleado</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Número</th>
                <th>Fecha Registrado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->idEmpleado }}</td>
                    <td>{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->Apellido }}</td>
                    <td>{{ $empleado->NumeroEmpleado }}</td>
                    <td>{{ $empleado->FechaRegistrado }}</td>
                    <td>
                        <a href="{{ route('empleados.show', $empleado) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
