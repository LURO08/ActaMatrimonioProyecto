<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Acta de Matrimonio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .formularios {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .primerFormulario {
            display: grid;
            grid-gap: 10px;
            width: 100%;
        }

        #formularioFlex3 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;

        }

        .formularioizquierda,
        .formularioDerecha {
            background-color: white;
            padding-bottom: 0px;
            padding-top: 0px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .funcionSiguiente {
            grid-column: 1 / -1;
            padding-bottom: 0px;
            padding-top: 0px;
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

        h1,
        h2 {
            text-align: center;
            width: 100%;
            padding-bottom: 0px;
            padding-top: 0px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;

        }

        input[type="text"],
        input[type="number"],
        select {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
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

        button:hover {
            background-color: #ce4848;
        }

        .NuevaActa {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 12px 26px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 0px;
            cursor: pointer;
        }

        .NuevaActa:hover {
            background-color: #c83c3c;
        }

        input[type="file"] {
            padding-left: 30px;
            /* Espacio para el icono */
            /* Asegúrate de que la URL del icono sea correcta */
            background-size: 20px;
            /* Ajusta según el tamaño de tu icono */
        }

        #contenedorArchivos {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            width: 40%;
            background-color: #f8f8f8;
        }

        #contenedorArchivos #visorArchivo {
            width: 100%;
            height: 100%;
        }
        #listaNombresArchivos {
            display: flex;
            flex-wrap: wrap; /* Permitir que los elementos se envuelvan a la siguiente línea */
            max-width: 100%; /* Limitar el ancho máximo para que no se desborde del contenedor */
        }

        #listaNombresArchivos li {
            list-style: none;
            padding: 15px;
            background-color: #df3a3a;
            margin: 5px;
            color: #fff;
            border-radius: 10px;
            font-size: 13px;
            flex-shrink: 0; /* Evitar que los elementos se contraigan más allá de su tamaño original */
        }
        #listaNombresArchivos li:hover{
            background-color: #a42222;
        }

        .Titulo{
            font-size: 18px;
            font-weight: 800;  
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

        .contenedorPDF{
            text-align: center;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        .TituloMostrarArchivos{
            margin-left: 10px;
        }

        .ImagenNovia{
            text-align: center;
            justify-content: center;
        }

        .ImagenNovia img{
            margin-left: 30px;
        }

        .ImagenNovio{
            text-align: center;
            justify-content: center;
        }

        .ImagenNovio img{
            margin-left: 30px;
        }
    </style>
    <!-- Fonts -->
   
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

    <div style="display: flex">
        <div class="formularios">
            <br>
            <h1 class="Titulo">GENERAR ACTA DE MATRIMONIO</h1>
            <br>
            <form class="primerFormulario" action="{{ route('acta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="FormularioDatosPadres" id="formularioFlex3">
                    @if (session('message'))
                        <script>
                            alert("{{ session('message') }}");
                        </script>
                    @endif
                    <div style="display: none;">
                        <label for="fechaDeMatrimonio">Fecha de Registro</label>
                        <input type="text" id="fechaDeMatrimonio" name="fechaDeMatrimonio">
                    </div>

                    <div class="SeleccionarNovia">
                        <h2>Seleccionar Novia</h2>
                        <select name="idNovia" id="idNovia" required>
                            <option value="">Seleccionar Novia</option>
                            @foreach ($personas as $persona)
                                @if (
                                    ($persona->estado_civil == 'soltero' || $persona->estado_civil == 'divorciado') &&
                                        ($persona->edad >= 18 && $persona->edad <= 50) &&
                                        $persona->sexo == 'femenino')
                                    <option value="{{ $persona->id }}">{{ $persona->nombre }}
                                        {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</option>
                                @endif
                            @endforeach
                        </select>

                        <br><br>

                        <div class="ImagenNovia">
                            <img  alt="" id="imgNovia" class="imgNovia" width="100" height="100"  style="display: none;">
                            <input type="file" name="fotoNovia" id="fotoNovia" accept=".png,.jpg,.jpeg" 
                            onchange="cargarfoto('fotoNovia','imgNovia')">
                        </div>
                    </div>

                    <div class="SeleccionarNovio">
                        <h2>Seleccionar Novio</h2>
                        <select name="idNovio" id="idNovio" required>
                            <option value="">Seleccionar Novio</option>
                            @foreach ($personas as $persona)
                                @if (
                                    ($persona->estado_civil == 'soltero' || $persona->estado_civil == 'divorciado') &&
                                        $persona->sexo == 'masculino' &&
                                        ($persona->edad >= 18 && $persona->edad < 50))
                                    <option value="{{ $persona->id }}">{{ $persona->nombre }}
                                        {{ $persona->apellidoPaterno }} {{ $persona->apellidoMaterno }}</option>
                                @endif
                            @endforeach
                        </select>
                        <br><br>
                        <div class="ImagenNovio">
                            <img id="imgNovio" class="imgNovio" width="100" height="100" style="display: none;">
                            <input type="file" name="fotoNovio" id="fotoNovio" accept=".png,.jpg,.jpeg" 
                            onchange="cargarfoto('fotoNovio','imgNovio')">
                        </div>
                    </div>

                    

                    <div class="funcionSiguiente">
                        <h2>DATOS DE LOS PADRES</h2>
                    </div>

                    <div class="formularioizquierda">
                        <h3>Datos del padre de la Novia</h3>
                            <label for="nombrePadre_novia">Nombre:</label>
                            <input type="text" name="nombrePadre_novia" id="nombrePadre_novia" required>

                            <label for="apellidoPaternoPadre_novia">Apellido Paterno:</label>
                            <input type="text" name="apellidoPaternoPadre_novia" id="apellidoPaternoPadre_novia"
                                required>

                            <label for="apellidoMaternoPadre_novia">Apellido Materno:</label>
                            <input type="text" name="apellidoMaternoPadre_novia" id="apellidoMaternoPadre_novia"
                                required>

                            <label for="nacionalidadPadre_novia">Nacionalidad:</label>
                            <input type="text" name="nacionalidadPadre_novia" id="nacionalidadPadre_novia">
                    </div>

                    <div class="formularioDerecha">
                        <h3>Datos de los padres del novio</h3>
                        <label for="nombrePadre_novio">Nombre:</label>
                        <input type="text" name="nombrePadre_novio" id="nombrePadre_novio" required>

                        <label for="apellidoPaternoPadre_novio">Apellido Paterno:</label>
                        <input type="text" name="apellidoPaternoPadre_novio" id="apellidoPaternoPadre_novio"
                            required>

                        <label for="apellidoMaternoPadre_novio">Apellido Materno:</label>
                        <input type="text" name="apellidoMaternoPadre_novio" id="apellidoMaternoPadre_novio"
                            required>

                        <label for="nacionalidadPadre_novio">Nacionalidad:</label>
                        <input type="text" name="nacionalidadPadre_novio" id="nacionalidadPadre_novio">
                    </div>

                    <div class="funcionSiguiente">
                        <button class="Btns"  type="button" onclick="siguiente()" id="btnAnterior2">Siguiente</button>
                    </div>
                </div>

                <div class="FormularioMadres" style="display: none;" id="formularioFlex3">
                    <div class="formularioizquierda">
                        <h3>Datos de la madre de la Novia</h2>
                            <label for="nombreMadre_novia">Nombre:</label>
                            <input type="text" name="nombreMadre_novia" id="nombreMadre_novia" required>

                            <label for="apellidoPaternoMadre_novia">Apellido Paterno:</label>
                            <input type="text" name="apellidoPaternoMadre_novia" id="apellidoPaternoMadre_novia"
                                required>

                            <label for="apellidoMaternoMadre_novia">Apellido Materno:</label>
                            <input type="text" name="apellidoMaternoMadre_novia" id="apellidoMaternoMadre_novia"
                                required>

                            <label for="nacionalidadMadre_novia">Nacionalidad:</label>
                            <input type="text" name="nacionalidadMadre_novia" id="nacionalidadMadre_novia">

                    </div>

                    <div class="formularioDerecha">
                        <h3>Datos de la madre del novio</h3>
                        <label for="nombreMadre_novio">Nombre:</label>
                        <input type="text" name="nombreMadre_novio" id="nombreMadre_novio" required>

                        <label for="apellidoPaternoMadre_novio">Apellido Paterno:</label>
                        <input type="text" name="apellidoPaternoMadre_novio" id="apellidoPaternoMadre_novio"
                            required>

                        <label for="apellidoMaternoMadre_novio">Apellido Materno:</label>
                        <input type="text" name="apellidoMaternoMadre_novio" id="apellidoMaternoMadre_novio"
                            required>

                        <label for="nacionalidadMadre_novio">Nacionalidad:</label>
                        <input type="text" name="nacionalidadMadre_novio" id="nacionalidadMadre_novio">
                    </div>
                    <div class="funcionSiguiente">
                        <h3>Regimen Patrimonial</h3>
                        <label for="regimenPratimonial">Regimen:</label>
                        <select name="regimenPratimonial" id="regimenPratimonial" required>
                            <option value="conyugal">Sociedad conyugal</option>
                            <option value="separacion">Separación de bienes</option>
                            <option value="gananciales">Sociedad de gananciales</option>
                        </select>

                        <label for="documentosMatrimonio">Documentos del Matrimonio:</label>
                        <input type="file" id="documentosMatrimonio" name="documentosMatrimonio[]" multiple
                            onchange="mostrarNombresArchivos()">
                        <br>

                        <!-- Lista para mostrar nombres de archivos subidos -->
                        <ul id="listaNombresArchivos"></ul>

                        <br>

                        <!-- Checkbox para visualizar archivos subidos -->
                        <div style="display: flex" class="contenedorPDF">
                            <input type="checkbox" id="mostrarArchivos" name="mostrarArchivos"
                                onclick="toggleVisibility()">
                            <label class="TituloMostrarArchivos"  for="mostrarArchivos"> Mostrar archivos subidos </label>
                        </div>

                    </div>

                    <div class="funcion2botones">
                        <button class="Btns"  type="button" onclick="anteriorFormulario()" id="btnAnterior2">Anterior</button>
                        <button class="Btns"  type="submit" id="btnSiguiente2">Guardar</button>
                    </div>


                </div>
            </form>
        </div>
        <!-- Contenedor para visualizar los archivos subidos -->
        <div id="contenedorArchivos" style="display:none;">
            <h4>Archivos Subidos:</h4>
            <iframe id="visorArchivo" style="width: 100%; height: 95%; display: none;"></iframe>
        </div>

    </div>


    <script>
        function cargarfoto(input, foto){
            var InputImg = document.getElementById(input);
            var img = document.getElementById(foto);
            Array.from(InputImg.files).forEach((file, index) => {

                    var reader = new FileReader();
                        reader.onload = function(e) {
                            img.src = e.target.result;
                            img.style.display = 'block';


                        };
                        reader.readAsDataURL(file);

                });
    }


        function mostrarNombresArchivos() {
            var input = document.getElementById('documentosMatrimonio');
            var lista = document.getElementById('listaNombresArchivos');
            var visor = document.getElementById('visorArchivo');
            var contenedor = document.getElementById('contenedorArchivos');
            var checkbox = document.getElementById('mostrarArchivos');
            lista.innerHTML = ''; // Limpiar lista antes de agregar nuevos nombres

            if (input.files) {
                Array.from(input.files).forEach((file, index) => {
                    var li = document.createElement('li');
                    li.textContent = file.name;
                    li.style.cursor = 'pointer';
                    li.onclick = () => {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            visor.style.display = 'block';
                            visor.src = e.target.result;
                            contenedor.style.display = 'block';
                            checkbox.checked = true;
                        };
                        reader.readAsDataURL(file);
                    };
                    lista.appendChild(li);
                });
            }
        }
        function toggleVisibility() {
            var checkbox = document.getElementById('mostrarArchivos');
            var contenedor = document.getElementById('contenedorArchivos');
            contenedor.style.display = checkbox.checked ? 'block' : 'none';
        }


        function anteriorFormulario() {
            const segundoFormulario = document.querySelector('.FormularioDatosPadres');
            const tercerFormulario = document.querySelector('.FormularioMadres');

            if (segundoFormulario.style.display !== 'none') {
                segundoFormulario.style.display = 'none';
                document.querySelector('.primerFormulario').style.display = 'grid';
            } else if (tercerFormulario.style.display !== 'none') {
                tercerFormulario.style.display = 'none';
                segundoFormulario.style.display = 'grid';
            }
        }

        function siguiente() {
            const primerFormulario = document.querySelector('.FormularioDatosPadres');
            const segundoFormulario = document.querySelector('.FormularioMadres');

            if (primerFormulario.style.display !== 'none') {
                primerFormulario.style.display = 'none';
                segundoFormulario.style.display = 'grid';
            } else if (segundoFormulario.style.display !== 'none') {
                segundoFormulario.style.display = 'none';
                tercerFormulario.style.display = 'grid';
            }
        }

        const fechaTag = document.getElementById("fechaDeMatrimonio");

        function actualizarFecha() {
            const fechaHoraActual = new Date();
            const dia = ('0' + fechaHoraActual.getDate()).slice(-2);
            const mes = ('0' + (fechaHoraActual.getMonth() + 1)).slice(-2);
            const año = fechaHoraActual.getFullYear();
            const fechaFormateada = `${dia}/${mes}/${año}`;
            fechaTag.value = fechaFormateada;
        }

        actualizarFecha();
        setInterval(actualizarFecha, 1000);
    </script>

</body>

</html>
