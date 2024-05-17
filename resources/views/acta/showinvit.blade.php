@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del formulario</h1>

        <div class="form-group">
            <label for="nombre">lugar:</label>
            <p id="nombre" class="form-control" readonly>{{ $formulario->nombre }}</p>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <p id="email" class="form-control" readonly>{{ $formulario->email }}</p>
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <p id="mensaje" class="form-control" readonly>{{ $formulario->mensaje }}</p>
        </div>

        <a href="{{ route('formulario.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection