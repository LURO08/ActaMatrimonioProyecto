<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Actas de Matrimonio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-ver {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-right: 5px;
        }

        .btn-eliminar {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 5px;
        }

        .btn-ver:hover,
        .btn-eliminar:hover {
            background-color: #c83c3c;
        }

        .btnCrear {
            background-color: #f44336;
            color: white;
            padding-left: 20px;
            padding-right: 30px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
            display: block;
            width: 150px;
            text-align: center;
            margin: 0 auto;
        }

        .btnCrear:hover {
            background-color: #c83c3c;
        }

        .btnCrearActa{
            background-color: #f44336;
            color: white;
            padding-left: 20px;
            padding-right: 30px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
            display: block;
            width: 100px;
            text-align: center;
            margin: 0 auto;
        }

        .btnCrearActa:hover {
            background-color: #c83c3c;
        }

        .btn-ver {
            margin-left: 5px;
        }

        .Titulo{
            font-size: 28px;
            font-weight: 800;
            
        }
    </style>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif


    <div class="container">
        <h1 class="Titulo">Listado de Personas</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Estado Civil</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombre }} {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</td>
                    <td>{{ $persona->estado_civil }}</td>
                    <td>{{ $persona->sexo }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>
                        <div class="btn-container">
                            <a href="{{ route('persona.show', $persona->id) }}" class="btn-ver">Ver</a>

                            <form action="{{ route('persona.destroy', $persona) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>


                            <div class="btn-container">
                                <a href="{{ route('persona.edit', $persona) }}" class="btn-ver">Editar</a>
                            </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('persona.create') }}" class="btnCrear"> Registrar Persona</a>
    </div>

    <div class="container">
        <h1 class="Titulo">Listado de Actas de Matrimonio</h1>
        <table>
            <tr>
                <th>No. Acta</th>
                <th>Fecha</th>
                <th>Novia</th>
                <th>Novio</th>
                <th>Acciones</th>
            </tr>
            @foreach ($actas as $acta)
               
                            <tr>
                                <td>{{ $acta->id }}</td>
                                <td>{{ $acta->fechaDeMatrimonio }}</td>
                                <td>
                                    @foreach ($personas as $persona)
                                    @if ($persona->id == $acta->idNovia)
                                    {{ $persona->nombre }} {{ $persona->apellidoPaterno }}
                                    {{ $persona->apellidoMaterno }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($personas as $persona)
                                    @if ($persona->id == $acta->idNovio)
                                    {{ $persona->nombre }} {{ $persona->apellidoPaterno }}
                                    {{ $persona->apellidoMaterno }}
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    <div class="btn-container">
                                        <a href="{{ route('acta.show', $acta->id) }}" class="btn-ver">Ver</a>
                                        <form action="{{ route('acta.destroy', $acta) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn-eliminar">Eliminar</button>
                                        </form>
                                    </div>
                                    <br>

                                    <a href="{{route('acta.invit', $acta)}}" class="btn-ver">Invitación</a>
                                </td>
                            </tr>
                
            @endforeach

        </table>
        <a href="{{ route('acta.create') }}" class="btnCrearActa"> Crear Acta</a>
    </div>

    <script>
        // Función para mostrar el mensaje en un alert
        window.onload = function() {
            var message = "{{ session('message') }}";
            if (message) {
                alert(message);
            }
        };
    </script>

</body>

</html>
