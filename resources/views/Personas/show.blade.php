<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Persona</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 20px auto; /* Centrar horizontalmente */
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .Titulo {
            text-align: center;
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li strong {
            display: inline-block;
            font-weight: bold;
        }

        .Btns {
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            background-color: #df3a3a;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .Btns:hover {
            background-color: #a42222;
        }
    </style>


</head>

<body>
 @include('layouts.navigation')
 
    <div class="container">
        <h1 class="Titulo">Datos de  {{ $persona->nombre }}</h1>

        <ul>
            <li><strong>Nombre:</strong> {{ $persona->nombre }}</li>
            <li><strong>Apellido Paterno:</strong> {{ $persona->apellidoPaterno }}</li>
            <li><strong>Apellido Materno:</strong> {{ $persona->apellidoMaterno }}</li>
            <li><strong>Estado Civil:</strong> {{ $persona->estado_civil }}</li>
            <li><strong>Sexo:</strong> {{ $persona->sexo }}</li>
            <li><strong>Edad:</strong> {{ $persona->edad }}</li>
            <li><strong>Entidad de Nacimiento:</strong> {{ $persona->entidad }}</li>
            <li><strong>Municipio:</strong> {{ $persona->municipio }}</li>
            <li><strong>Nacionalidad:</strong> {{ $persona->nacionalidad }}</li>
            <li><strong>CURP:</strong> {{ $persona->curp }}</li>
        </ul>

        <a class="Btns"  href="{{ route('dashboard') }}">Volver</a>
    </div>
</body>

</html>
