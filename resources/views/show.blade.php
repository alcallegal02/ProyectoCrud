@extends('layout')

@section('content')
    <h1>Detalles del Coche</h1>
    <p><strong>Marca:</strong> {{ $car->brand }}</p>
    <p><strong>Modelo:</strong> {{ $car->model }}</p>
    <p><strong>Año:</strong> {{ $car->year }}</p>
    <p><strong>Precio:</strong> ${{ number_format($car->price, 2) }}</p>

    <a href="{{ route('cars.index') }}" class="btn btn-secondary">Volver</a>
@endsection