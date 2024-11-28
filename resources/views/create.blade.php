@extends('layout')

@section('title', 'Añadir Coche')

@section('content')
    <h1>Añadir Nuevo Coche</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" placeholder="Ingrese la marca" required>

        <label for="model">Modelo:</label>
        <input type="text" id="model" name="model" placeholder="Ingrese el modelo" required>

        <label for="year">Año:</label>
        <input type="number" id="year" name="year" min="1886" max="{{ date('Y') }}" placeholder="Ingrese el año" required>

        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" min="0" step="0.01" placeholder="Ingrese el precio" required>

        <button type="submit">Guardar</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
