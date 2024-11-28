@extends('layout')

@section('title', 'Lista de Coches')

@section('content')
    <h1>Lista de Coches</h1>
    <a href="{{ route('cars.create') }}" class="btn btn-info">Añadir Nuevo Coche</a>
    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->price }} €</td>
                    <td>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
