<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Actualizar Persona</title>
    
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

        h1 {
            text-align: center;
            font-size: 20px;
            font-weight: 800;
        }

        h2{
            text-align: center;
            font-size: 18px;
            font-weight: 800;
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
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c83c3c;
        }

        .funcion2botones {
            display: flex;
            justify-content: space-between;
        }
        .funcion2botones  button{
            margin-left: 5px;
        }
    </style>
</head>

<body>
    @include('layouts.navigation')

    <div class="formularios">
        <h1>MODIFICAR DATOS PERSONA</h1>

        <form class="formulario" action="{{ route('persona.update', $persona) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="updating" value="true">

            <div class="formularioDatosPersonales">
                <h2>DATOS PERSONALES</h2>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $persona->nombre }}" required>

                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" name="apellidoPaterno" id="apellidoPaterno"
                    value="{{ $persona->apellidoPaterno }}" required>

                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" name="apellidoMaterno" id="apellidoMaterno"
                    value="{{ $persona->apellidoMaterno }}" required>

                <label for="estado_civil">Estado Civil:</label>
                <select name="estado_civil" id="estado_civil" required>
                    <option value="soltero" {{ $persona->estado_civil == 'soltero' ? 'selected' : '' }}>Soltero</option>
                    <option value="casado" {{ $persona->estado_civil == 'casado' ? 'selected' : '' }}>Casado</option>
                    <option value="divorciado" {{ $persona->estado_civil == 'divorciado' ? 'selected' : '' }}>Divorciado
                    </option>
                </select>

                <label>Sexo:</label>
                <input type="radio" name="sexo" id="sexo_femenino" value="femenino"
                    {{ $persona->sexo == 'femenino' ? 'checked' : '' }} required> Femenino
                <input type="radio" name="sexo" id="sexo_masculino" value="masculino"
                    {{ $persona->sexo == 'masculino' ? 'checked' : '' }} required> Masculino

                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" value="{{ $persona->edad }}" required>

                <button type="button" onclick="siguienteFormulario()" id="btnSiguiente2">Siguiente</button>

            </div>



            <div class="formularioNacimiento" style="display: none;">
                <h2>DATOS DE NACIMIENTO</h2>
                <label for="entidad">Entidad de Nacimiento:</label>
                <input type="text" name="entidad" id="entidad" value="{{ $persona->entidad }}" required>

                <label for="municipio">Municipio:</label>
                <input type="text" name="municipio" id="municipio" value="{{ $persona->municipio }}" required>

                <label for="nacionalidad">Nacionalidad:</label>
                <input type="text" name="nacionalidad" id="nacionalidad" value="{{ $persona->nacionalidad }}">

                <label for="curp">CURP:</label>
                <input type="text" name="curp" id="curp" value="{{ $persona->curp }}" required>

                <div class="funcion2botones">
                    <button type="button" onclick="anteriorFormulario()" id="btnAnterior">Anterior</button>
                    <button type="submit" id="btnGuardar">Guardar</button>
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
