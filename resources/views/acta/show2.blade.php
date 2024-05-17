
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Acta de Matrimonio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            font-weight: 600;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px; /* Tamaño fijo para el contenedor */
            height: 1000px; /* Tamaño fijo para el contenedor */
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
            background-image: url('{{ asset('img/2.png') }}');
            background-repeat: no-repeat;
            /* Para evitar que se repita la imagen */
            background-size: 100% 100%;
            /* Para ajustar la imagen al 100% del ancho y alto del contenedor */
            background-position: center;
            /* Para centrar la imagen */
        }

        .CURPRegistro{
            text-align: right;
            margin-right: 8%;
            margin-top: 12%;
        }
        .CURPRegistro p{
            margin-top: 0;
            margin-bottom: 1px;
        }
        .EntidadRegistro{
            text-align: right;
            margin-right: 16%;
            margin-top: 4%;
            font-size: 15px;
        }
        .MunicipioRegistro{
            text-align: right;
            margin-right: 14%;
            margin-top: 2%;
            font-size: 15px;
        }
        .FechaIncripcionRegistro{
            text-align: right;
            margin-right: 15%;
            margin-top: 2%;
            font-size: 15px;
        }
        .OficinaNoRegistro{
            text-align: right;
            margin-right: 30%;
            margin-top: 2.7%;
            font-size: 15px;
            
        }
        .LibroNoRegistro{
            text-align: right;
            margin-right: 20%;
            margin-top: -4%;
            font-size: 15px;
        }
        .ActaNoRegistro{
            text-align: right;
            margin-right: 8%;
            margin-top: -4%;
            font-size: 15px;
        }

        .NombreNovia{
            text-align: left;
            margin-top: 5%;
            margin-left: 19%;
            font-size: 18px;
        }

        .ApellidoPatNovia{
            text-align: left;
            margin-top: -5%;
            margin-left: 48%;
            font-size: 18px;
        }

        .ApellidoMatNovia{
            text-align: right;
            margin-top: -5%;
            margin-right: 15%;
            font-size: 18px;
        }

        .LugarNacimientoNovia{
            text-align: left;
            margin-top: 6%;
            margin-left: 22%;
            font-size: 18px;
        }

        .NacionalidadNovia{
            text-align: right;
            margin-top: -5%;
            margin-right: 34%;
            font-size: 18px;
        }

        .SexoNovia{
            text-align: right;
            margin-top: -5%;
            margin-right: 15%;
            font-size: 18px;
        }

        .EdadNovia{
            text-align: right;
            margin-top: -5%;
            margin-right: 8%;
            font-size: 18px;
        }

        .NombreNovio{
            text-align: left;
            margin-top: 7%;
            margin-left: 19%;
            font-size: 18px;
        }

        .ApellidoPatNovio{
            text-align: left;
            margin-top: -5%;
            margin-left: 48%;
            font-size: 18px;
        }

        .ApellidoMatNovio{
            text-align: right;
            margin-top: -5%;
            margin-right: 15%;
            font-size: 18px;
        }

        .LugarNacimientoNovio{
            text-align: left;
            margin-top: 6%;
            margin-left: 22%;
            font-size: 18px;
        }

        .NacionalidadNovio{
            text-align: right;
            margin-top: -5%;
            margin-right: 34%;
            font-size: 18px;
        }

        .SexoNovio{
            text-align: right;
            margin-top: -5%;
            margin-right: 15%;
            font-size: 18px;
        }

        .EdadNovio{
            text-align: right;
            margin-top: -5%;
            margin-right: 8%;
            font-size: 18px;
        }
       



    </style>
</head>

<body>
    <a href="{{ route('acta.create') }}">Volver a Actas</a>
    <button onclick="exportarPDF()" class="btn btn-primary">Exportar a PDF</button>
    <div class="container">

        <div class="DatosIdentificadores">
            <div class="CURPRegistro">
                <p>{{$acta->curp_novia}}</p>
                <p>{{$acta->curp_novio}}</p>
            </div>
    
            <div class="EntidadRegistro">
                <p>MÉXICO</p>
            </div>
    
            <div class="MunicipioRegistro">
                <p>CHILPANCINGO</p>
            </div>
    
            <div class="FechaIncripcionRegistro">
                <p>{{$acta->fechaDeRegistro}}</p>
            </div>
    
            <div class="OficinaNoRegistro">
                <p>0001</p>
            </div>
            <div class="LibroNoRegistro">
                <p>0001</p>
            </div>
            <div class="ActaNoRegistro">
                <p class="NoActa">0001</p>
            </div>
        </div>
        <div class="DatosNovia">
            <p class="NombreNovia">{{$acta->nombre_novia}}</p>
            <p class="ApellidoPatNovia">{{$acta->apellidoPaterno_novia}}</p>
            <p class="ApellidoMatNovia">{{$acta->apellidoMaterno_novia}}</p>
            <p class="LugarNacimientoNovia">{{$acta->municipio_novia}}</p>
            <p class="NacionalidadNovia">{{$acta->nacionalidad_novia}}</p>
            <p class="SexoNovia">{{$acta->sexo_novia}}</p>
            <p class="EdadNovia">{{$acta->edad_novia}}</p>
        </div>

        <div class="DatosNovio">
            <p class="NombreNovio">{{$acta->nombre_novio}}</p>
            <p class="ApellidoPatNovio">{{$acta->apellidoPaterno_novio}}</p>
            <p class="ApellidoMatNovio">{{$acta->apellidoMaterno_novio}}</p>
            <p class="LugarNacimientoNovio">{{$acta->municipio_novio}}</p>
            <p class="NacionalidadNovio">{{$acta->nacionalidad_novio}}</p>
            <p class="SexoNovio">{{$acta->sexo_novio}}</p>
            <p class="EdadNovio">{{$acta->edad_novio}}</p>
        </div>
        
        
        

    
    </div>


    <script>
        var NoActa = document.querySelector('.NoActa');
        var id = {{ $acta->id }};

        if (id >= 1 && id <= 9) {
            // Si el id está entre 1 y 9, agregamos ceros adicionales al principio
            NoActa.textContent = "000" + id;
        } else if (id >= 10 && id <= 99) {
            // Si el id está entre 10 y 99, agregamos un cero adicional al principio
            NoActa.textContent = "00" + id;
        } else {
            // Para otros casos, simplemente usamos el id tal como está
            NoActa.textContent = id;
        }

        function exportarPDF() {
            const element = document.querySelector('.container');
            // Exporta el PDF
            html2pdf()
                .from(element)
                .set({
                    margin: -0.2,
                    filename: 'acta_matrimonio.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                })
                .toPdf()
                .get('pdf')
                .then(function(pdf) {
                    // No necesitamos agregar la imagen como marco, ya que es el fondo del PDF
                })
                .save()
                .then(() => {
                    // No es necesario recargar la página después de exportar el PDF
                    console.log('PDF exportado');
                });

        }
    </script>


</body>

</html>