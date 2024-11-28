@extends('layout')

@section('title', 'Editar Coche')

@section('content')
    <h1>Editar Coche</h1>
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" value="{{ $car->brand }}" required>

        <label for="model">Modelo:</label>
        <input type="text" id="model" name="model" value="{{ $car->model }}" required>

        <label for="year">Año:</label>
        <input type="number" id="year" name="year" value="{{ $car->year }}" min="1886" max="{{ date('Y') }}" required>

        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" value="{{ $car->price }}" min="0" step="0.01" required>

        <button type="submit">Actualizar</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
