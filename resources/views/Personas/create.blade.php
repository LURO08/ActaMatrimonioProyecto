<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Persona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .formularios {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            text-align: center;
        }

        .formulario {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }


input[type="radio"] {
    margin-right: 5px;
}

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ed4040;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .funcion2botones {
            display: flex;
            grid-column: 1 / -1;
            grid-template-columns: repeat(1, 1fr);
            justify-content: space-between;
            padding-bottom: 0px;
            padding-top: 0px;
        }

        .funcion2botones button {
            width: 49%;
        }

        button:hover {
            background-color: #ce4848;
        }

        .NuevaActa {
            display: block;
            width: 30%;
            padding: 12px 26px;
            background-color: #f44336;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .NuevaActa:hover {
            background-color: #c83c3c;
        }

        .flex-container {
            display: flex;
            align-items: center;
        }

        .radio-label {
            margin-right: 20px;
        }

        .Titulo{
            font-size: 24px;
            font-weight: 700;
        }
        .SubTitulo{
            font-size: 20px;
            font-weight: 700;
        }

        .Btns{
            display: block;
            width: 100%;
            padding: 8px;
            background-color: #ed4040;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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
    <div class="formularios">
        <h1 class="Titulo">REGISTRO DE PERSONA</h1>

        <form class="formulario" action="{{ route('persona.store') }}" method="POST">
            @csrf

            @if (session('message'))
                <script>
                    alert("{{ session('message') }}");
                </script>
            @endif

            <div class="formularioDatosPersonales">
                <h2 class="SubTitulo">DATOS PERSONALES</h2>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>

                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" name="apellidoPaterno" id="apellidoPaterno" required>

                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" name="apellidoMaterno" id="apellidoMaterno" required>

                <label for="estado_civil">Estado Civil:</label>
                <select name="estado_civil" id="estado_civil" required>
                    <option value="soltero">Soltero</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                </select>

                <label for="sexo">Sexo:</label>
                <input type="radio" name="sexo" id="sexo_femenino" value="femenino" required> Femenino
                <input type="radio" name="sexo" id="sexo_masculino" value="masculino" required> Masculino


                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" required>

                <div>
                    <button class="Btns"  type="button" onclick="siguienteFormulario()" id="btnSiguiente2">Siguiente</button>
                </div>
            </div>

            <div class="formularioNacimiento" style="display: none;">
                <h2 class="SubTitulo">DATOS DE NACIMIENTO</h2>
                <label for="entidad">Entidad de Nacimiento:</label>
                <input type="text" name="entidad" id="entidad" required>

                <label for="municipio">Municipio:</label>
                <input type="text" name="municipio" id="municipio" required>

                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" name="nacionalidad" id="nacionalidad">

                <label for="curp">CURP:</label>
                <input type="text" name="curp" id="curp" required>

                <div class="funcion2botones">
                    <button class="Btns"  type="button" onclick="anteriorFormulario()" id="btnAnterior">Anterior</button>
                    <button class="Btns"    type="submit" id="btnGuardar">Guardar</button>
                </div>
                
            </div>

           
        </form>
    </div>

    <script>
        var primerFormulario = document.querySelector('.formularioDatosPersonales');
        var segundoFormulario = document.querySelector('.formularioNacimiento');

        function siguienteFormulario() {

            // Verifica cuál formulario está actualmente visible y muestra el siguiente
            if (primerFormulario.style.display !== 'none') {
                primerFormulario.style.display = 'none';
                segundoFormulario.style.display = 'block';
            }
        }

        function anteriorFormulario() {
            // Verifica cuál formulario está actualmente visible y muestra el siguiente
            if (segundoFormulario.style.display !== 'none') {
                segundoFormulario.style.display = 'none';
                primerFormulario.style.display = 'block';
            }
        }
    </script>
</body>

</html>
