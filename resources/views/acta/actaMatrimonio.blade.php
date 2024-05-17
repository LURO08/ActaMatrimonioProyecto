<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acta Matrimonio</title>

    <style>
         <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            font-weight: 600;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            /* Tamaño fijo para el contenedor */
            height: 1000px;
            /* Tamaño fijo para el contenedor */
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
            background-image: url('{{ asset('img/4.png') }}');
            background-repeat: no-repeat;
            /* Para evitar que se repita la imagen */
            background-size: 100% 100%;
            /* Para ajustar la imagen al 100% del ancho y alto del contenedor */
            background-position: center;
            /* Para centrar la imagen */
        }

        .contenedor{
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
        }

        .DatosIdentificadores {
            margin-top: -30%;
        }

        .DatosIdentificadores p {
            font-size: 14px;
        }

        .ClaveIdentificador {
            text-align: right;
            margin-right: 17%;
            margin-top: 11%;
            font-size: 15px;
        }

        .ClaveIdentificador p {
            margin-top: 0px;
            margin-bottom: 0px;
        }


        .TituloCURPRegistro {
            text-align: center;
            margin-left: 52%;
            margin-top: 0%;
            padding: 0;
            width: 42%;
            background-color: #b8b8b8
        }

        .CURPRegistro {
            text-align: right;
            margin-right: 14%;
            margin-top: -2%;
        }

        .CURPRegistro p {
            margin-top: 0;
            margin-bottom: 1px;
        }

        .TituloEntidadRegistro {
            text-align: center;
            margin-left: 52%;
            margin-top: 0%;
            font-size: 15px;
            width: 42%;
            background-color: #b8b8b8;
        }

        .EntidadRegistro {
            text-align: right;
            margin-right: 22%;
            margin-top: -2%;
            font-size: 15px;
        }

        .MunicipioRegistro {
            text-align: right;
            margin-right: 19%;
            margin-top: -2%;
            font-size: 15px;
        }

        .TituloMunicipioRegistro {
            text-align: center;
            margin-left: 52%;
            margin-top: -2%;
            font-size: 15px;
            width: 42%;
            background-color: #b8b8b8;
        }

        .tablaDatosOFicinaLibro {
            margin-top: -2%;
            margin-left: 52%;
            margin-bottom: 2%;
            width: 42%;
            font-size: 15px;
            text-align: center;
        }

        .tablaDatosOFicinaLibro td {}

        .DatosNovia {
            border: 2px solid;
            width: 87.5%;
            margin-left: 6%;
            margin-top: -2.5%;
        }

        .NombreNovia {
            text-align: left;
            margin-top: 0.3%;
            margin-left: 19%;
            font-size: 18px;
        }

        .ApellidoPatNovia {
            text-align: left;
            margin-top: -5.1%;
            margin-left: 48%;
            font-size: 18px;
        }

        .ApellidoMatNovia {
            text-align: right;
            margin-top: -5.1%;
            margin-right: 15%;
            font-size: 18px;
        }

        .linia {
            text-align: center;
            margin-top: -3%;
            margin-left: 0%;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .TituloNombre {
            text-align: left;
            margin-top: -2.8%;
            margin-left: 18%;
            font-size: 18px;
        }

        .TituloApellidoP {
            text-align: left;
            margin-top: -5.1%;
            margin-left: 44%;
            font-size: 18px;
        }

        .TituloAPellidoM {
            text-align: right;
            margin-top: -5.4%;
            margin-right: 8%;
            font-size: 18px;
        }

        .entidadNovia {
            text-align: left;
            margin-top: -1.7%;
            margin-bottom: 23px;
            margin-left: 8%;
            font-size: 17px;
        }

        .MunicipioNovia {
            text-align: left;
            margin-top: -6.2%;
            margin-left: 34%;
            font-size: 17px;
        }

        .NacionalidadNovia {
            text-align: right;
            margin-top: -5%;
            margin-bottom: 23px;
            margin-right: 31%;
            font-size: 17px;
        }

        .SexoNovia {
            text-align: right;
            margin-top: -6%;
            margin-bottom: 23px;
            margin-right: 15%;
            font-size: 17px;
        }

        .EdadNovia {
            text-align: right;
            margin-top: -6.5%;
            margin-bottom: 23px;
            margin-right: 5%;
            font-size: 17px;

        }

        .linea2 {
            text-align: center;
            margin-top: -3%;
            margin-left: 0%;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .TituloEntidadNovia {
            text-align: left;
            margin-top: -2%;
            margin-left: 2%;
            font-size: 16px;
            margin-bottom: 17px;
        }

        .TituloMunicipioNovia {
            text-align: left;
            margin-top: -5.1%;
            margin-left: 27%;
            font-size: 16px;
        }

        .TituloNacionalidadNovia {
            text-align: right;
            margin-top: -5.1%;
            margin-right: 30%;
            font-size: 16px;
        }

        .TituloSexoNovia {
            text-align: right;
            margin-top: -5.1%;
            margin-right: 18%;
            font-size: 16px;
        }

        .TituloEdadNovia {
            text-align: right;
            margin-top: -4.4%;
            margin-right: 4%;
            font-size: 16px;
        }

        .TituloContrayentes {
            text-align: center;
            width: 88%;
            margin-left: 6%;
            margin-top: -2%;
            font-size: 20px;
            background-color: #b8b8b8;
        }

        .DatosNovio {
            border: 2px solid;
            width: 87.5%;
            margin-left: 6%;
            margin-top: 0.5%;
            /* Cambiado a positivo para moverlo hacia abajo */
        }

        .NombreNovio {
            text-align: left;
            margin-top: 0.3%;
            margin-left: 19%;
            font-size: 18px;
        }

        .ApellidoPatNovio {
            text-align: left;
            margin-top: -5.1%;
            margin-left: 48%;
            font-size: 18px;
        }

        .ApellidoMatNovio {
            text-align: right;
            margin-top: -5.1%;
            margin-right: 15%;
            font-size: 18px;
        }

        .linia3 {
            text-align: center;
            margin-top: -3%;
            margin-left: 0%;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .TituloNombre {
            text-align: left;
            margin-top: -2.8%;
            margin-left: 18%;
            font-size: 16px;
        }

        .TituloApellidoP {
            text-align: left;
            margin-top: -4.9%;
            margin-left: 44%;
            font-size: 16px;
        }

        .TituloAPellidoM {
            text-align: right;
            margin-top: -5%;
            margin-right: 8%;
            font-size: 16px;
        }

        .entidadNovio {
            text-align: left;
            margin-top: -1.3%;
            margin-left: 8%;
            font-size: 18px;
        }

        .MunicipioNovio {
            text-align: left;
            margin-top: -6.2%;
            margin-left: 34%;
            font-size: 18px;
        }

        .NacionalidadNovio {
            text-align: right;
            margin-top: -5%;
            margin-right: 31%;
            font-size: 18px;
        }

        .SexoNovio {
            text-align: right;
            margin-top: -6%;
            margin-right: 15%;
            font-size: 18px;
        }

        .EdadNovio {
            text-align: right;
            margin-top: -5%;
            margin-right: 5%;
            font-size: 18px;
        }

        .linea4 {
            text-align: center;
            margin-top: -3%;
            margin-left: 0%;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .TituloEntidadNovio {
            text-align: left;
            margin-top: -2.8%;
            margin-left: 2%;
            font-size: 16px;
        }

        .TituloMunicipioNovio {
            text-align: left;
            margin-top: -5.1%;
            margin-left: 27%;
            font-size: 16px;
        }

        .TituloNacionalidadNovio {
            text-align: right;
            margin-top: -5.1%;
            margin-right: 30%;
            font-size: 16px;
        }

        .TituloSexoNovio {
            text-align: right;
            margin-top: -5.1%;
            margin-right: 18%;
            font-size: 16px;
        }

        .TituloEdadNovio {
            text-align: right;
            margin-top: -4%;
            margin-right: 4%;
            font-size: 16px;
        }

        .TituloPadreContrayentes {
            text-align: left;
            width: 50%;
            margin-left: 6%;
            margin-top: 1%;
            font-size: 18px;
            background-color: #b8b8b8;
            padding-left: 50px;
        }

        .TituloNacionalidadContrayentes {
            text-align: center;
            width: 32%;
            margin-left: 62%;
            margin-top: -4.9%;
            font-size: 18px;
            background-color: #b8b8b8;
        }

        .NombrePadre {
            width: 55%;
            border: 2px solid;
            padding: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            margin-left: 6%;
            margin-top: -2.4%;
            text-align: center;
            font-size: 15px;
        }

        .NombreMadre {
            width: 55%;
            border: 2px solid;
            border-block-start: 0px;
            padding: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            margin-left: 6%;
            margin-top: -2.4%;
            text-align: center;
            font-size: 15px;
        }

        .NombrePadre2 {
            width: 55%;

            border: 2px solid;
            border-block-start: 0px;
            padding: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            margin-left: 6%;
            margin-top: -2.4%;
            text-align: center;
            font-size: 15px;
        }

        .NacionalidadPadreNovia {
            border: 2px solid;
            border-left: 0px;
            width: 25%;
            padding: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            font-size: 15px;
            margin-left: 65%;
            margin-top: -16.1%;
            text-align: center;
        }

        .NacionalidadMadreNovia {
            border: 2px solid;
            border-top: 0px;
            border-left: 0px;
            width: 25%;
            font-size: 15px;
            padding: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            margin-left: 65%;
            margin-top: -2.4%;
            text-align: center;
        }

        .NacionalidadPadreNovio {
            border: 2px solid;
            border-left: 0px;
            border-top: 0px;
            width: 25%;
            padding: 15px;
            font-size: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            margin-left: 65%;
            margin-top: -2.4%;
            text-align: center;
        }

        .NacionalidadMadreNovio {
            border: 2px solid;
            border-top: 0px;
            border-left: 0px;
            font-size: 15px;
            width: 25%;
            padding: 15px;
            padding-bottom: 6px;
            padding-top: 6px;
            margin-left: 65%;
            margin-top: -2.4%;
            text-align: center;
        }

        .ContenedorRegimenPatrimonial {
            border: 2px solid;
            width: 30%;
            text-align: center;
            margin-left: 35%;
            margin-top: 0.5%;
        }

        .ContenedorRegimenPatrimonial {
            display: flex;
            /* Utilizamos flexbox */
            align-items: center;
            /* Centramos verticalmente */
            justify-content: center;
            /* Centramos horizontalmente */
            padding: 5px;
            /* Ajustamos el padding */
            margin-top: -1%;
            /* Ajustamos el margen */
            width: fit-content;
            /* El ancho se ajustará automáticamente */
            flex-direction: column;
            /* Apilamos los elementos uno arriba del otro */
        }


        .RegimenPatrimonial {
            margin: 0;
            /* Quitamos el margen para evitar espacios innecesarios */
        }

        .TituloRegimenPatrimonial {
            margin: 0;
            /* Quitamos el margen para evitar espacios innecesarios */
            font-weight: bold;
            /* Opcional: añadimos negrita al título */
            border-top: 2px solid;
            width: 107%;
        }

        .tablaAnotaCertifi {
            width: 88%;
            margin-left: 6%;
            text-align: center;

        }

        .tablaAnotaCertifi td {
            font-size: 10px;
            text-align: justify;
            width: 50%;
            vertical-align: top;
            /* Alinea el texto hacia arriba */
        }

        .tablaSelloFirma {
            width: 88%;
            margin-left: 6%;
            text-align: center;

        }

        .tablaSelloFirma td {
            font-size: 8px;
            text-align: justify;
            width: 50%;
            vertical-align: top;
            /* Alinea el texto hacia arriba */
        }

        .tablaSelloFirma th {
            text-align: justify;
            width: 50%;
        }
        .CodigoQR{
            margin-left: 8%;
            
        }
        .DatosQR{
            margin-top: -11%;
            margin-left: 25%;
        }
        .DatosFolio{
            margin-left: 15%;
            margin-top: 3%;
        }
        .CodigoFolio{
            margin-top: -2%;
            margin-left: 10%;
        }
        .barrafolio{
            margin-top: -2%;
            margin-left: 7.5%;
        }
        .TextoEUM{
            margin-left: 10%;
            font-size: 22px;
            margin-top: 10%;
        }

        .TextoAM{
            margin-left: 13%;
            font-size: 22px;
        }

        
        .section {
            margin-bottom: 20px;
        }

        .title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .detail {
            margin-left: 20px;
        }

        .detail p {
            margin: 5px 0;
        }

        .detail p strong {
            font-weight: bold;
            margin-right: 5px;
        }
    </style>
    </style>
</head>
<body>
    <div class="container" style="display:none;">

        <div>
            <div class="DatosFolio">
                <p>FOLIO</p>
            </div>

            <div class="CodigoFolio">
                <p>MXRC 62224294</p>
            </div>

            <div class="barrafolio">
                <img src="{{ asset('img/barrafolio.png') }}" alt="">
            </div>

            <div class="TextoEUM">
                <p>Estados Unidos Mexicanos</p>
            </div>

            <div class="TextoAM">
                <p>Acta de Matrimonio</p>
            </div>
    
        </div>
       

        <div class="DatosIdentificadores">

            <div class="ClaveIdentificador">
                <p>Identificador Electronico</p>
                <p>01534664576556756757</p>
            </div>
            <p class="TituloCURPRegistro">Clave Única de Registro de población de los <br> contribuyentes</p>
            <div class="CURPRegistro">
                @foreach ($personas as $persona)
                    @if ($acta->idNovia == $persona->id)
                        <p>{{ $persona->curp }}</p>
                    @endif
                    @endforeach
                @foreach ($personas as $persona)
                    @if ($acta->idNovio == $persona->id)
                        <p>{{ $persona->curp }}</p>
                    @endif
                    @endforeach
            </div>

            <p class="TituloEntidadRegistro">Entidad de Registro</p>

            <div class="EntidadRegistro">
                <p>MÉXICO</p>
            </div>

            <p class="TituloMunicipioRegistro">Municipio</p>

            <div class="MunicipioRegistro">
                <p>CHILPANCINGO</p>
            </div>

            <table border="1" class="tablaDatosOFicinaLibro">
                <tr>
                    <td>Oficina</td>
                    <td>Libro</td>
                    <td>Número de Acta</td>
                    <td>Fecha de Registro</td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>0001</td>
                    <td class="NoActa">0001</td>
                    <td>{{ $acta->fechaDeMatrimonio }}</td>
                </tr>
            </table>
        </div>


        <p class="TituloContrayentes">Datos de los contrayentes</p>
        <div class="DatosNovia">
            @foreach ($personas as $persona)
                @if ($acta->idNovia == $persona->id)
                    <p class="NombreNovia">{{ $persona->nombre }}</p>
                    <p class="ApellidoPatNovia">{{ $persona->apellidoPaterno }}</p>
                    <p class="ApellidoMatNovia">{{ $persona->apellidoMaterno }}</p>
                    <p class="linia"></p>
                    <p class="TituloNombre">Nombre(s):</p>
                    <p class="TituloApellidoP">Primer Apellido:</p>
                    <p class="TituloAPellidoM">Segundo APellido:</p>
                    <p class="entidadNovia">{{ $persona->entidad }}</p>
                    <p class="MunicipioNovia">{{ $persona->municipio }}</p>
                    <p class="NacionalidadNovia">{{ $persona->nacionalidad }}</p>
                    <p class="SexoNovia">{{ $persona->sexo }}</p>
                    <p class="EdadNovia">{{ $persona->edad }}</p>
                    <p class="linea2"></p>
                @endif
            @endforeach
            <p class="TituloEntidadNovia">Entidad de Nacimiento</p>
            <p class="TituloMunicipioNovia">Municipio de Nacimiento</p>
            <p class="TituloNacionalidadNovia">Nacionalidad</p>
            <p class="TituloSexoNovia">Sexo</p>
            <p class="TituloEdadNovia">Edad</p>

        </div>

        <div class="DatosNovio">
            @foreach ($personas as $persona)
                @if ($acta->idNovio == $persona->id)
                    <p class="NombreNovio">{{ $persona->nombre }}</p>
                    <p class="ApellidoPatNovio">{{ $persona->apellidoPaterno }}</p>
                    <p class="ApellidoMatNovio">{{ $persona->apellidoMaterno }}</p>
                    <p class="linia3"></p>
                    <p class="TituloNombre">Nombre(s):</p>
                    <p class="TituloApellidoP">Primer Apellido:</p>
                    <p class="TituloAPellidoM">Segundo Apellido:</p>
                    <p class="entidadNovio">{{ $persona->entidad }}</p>
                    <p class="MunicipioNovio">{{ $persona->municipio }}</p>
                    <p class="NacionalidadNovio">{{ $persona->nacionalidad }}</p>
                    <p class="SexoNovio">{{ $persona->sexo }}</p>
                    <p class="EdadNovio">{{ $persona->edad }}</p>

                @endif
            @endforeach

            <p class="linea4"></p>
            <p class="TituloEntidadNovio">Entidad de Nacimiento</p>
            <p class="TituloMunicipioNovio">Municipio de Nacimiento</p>
            <p class="TituloNacionalidadNovio">Nacionalidad</p>
            <p class="TituloSexoNovio">Sexo</p>
            <p class="TituloEdadNovio">Edad</p>
        </div>

        <p class="TituloPadreContrayentes">Datos de los padres de los contrayentes</p>
        <p class="TituloNacionalidadContrayentes">Nacionalidad</p>
        <div class="DatosPadresContribuyentes">

            <p class="NombrePadre">{{ strtoupper($acta->nombrePadre_novia) }}
                {{ strtoupper($acta->apellidoPaternoPadre_novia) }}
                {{ strtoupper($acta->apellidoMaternoPadre_novia) }}</p>
            <p class="NombreMadre">{{ strtoupper($acta->nombreMadre_novia) }}
                {{ strtoupper($acta->apellidoPaternoMadre_novia) }}
                {{ strtoupper($acta->apellidoMaternoMadre_novia) }}</p>

            <p class="NombrePadre2">{{ strtoupper($acta->nombrePadre_novio) }}
                {{ strtoupper($acta->apellidoPaternoPadre_novio) }}
                {{ strtoupper($acta->apellidoMaternoPadre_novio) }}</p>
            <p class="NombreMadre">{{ strtoupper($acta->nombreMadre_novio) }}
                {{ strtoupper($acta->apellidoPaternoMadre_novio) }}
                {{ strtoupper($acta->apellidoMaternoMadre_novio) }}</p>

            <p class="NacionalidadPadreNovia">{{ strtoupper($acta->nacionalidadPadre_novia) }}</p>
            <p class="NacionalidadMadreNovia">{{ strtoupper($acta->nacionalidadMadre_novia) }}</p>
            <p class="NacionalidadPadreNovio">{{ strtoupper($acta->nacionalidadPadre_novio) }}</p>
            <p class="NacionalidadMadreNovio">{{ strtoupper($acta->nacionalidadMadre_novio) }}</p>
        </div>

        <div class="ContenedorRegimenPatrimonial">
            <p class="RegimenPatrimonial"> SOCIEDAD {{ strtoupper($acta->regimenPratimonial) }}</p>
            <p class="TituloRegimenPatrimonial">Régimen Patrimonial:</p>
        </div>


        <div class="AnotacionCerificacion">
            <table border="1" class="tablaAnotaCertifi">
                <tr>
                    <th>Anotaciones Marginales</th>
                    <th>Certificación</th>
                </tr>
                <tr>
                    <td>Sin anotaciones marginales</td>
                    <td>La presente certificación es un extracto del acta y se extiende de conformidad
                        con los articulos 3.1 primer parrafo y 3.7 del Codigo CIvil del Estado de México;
                        6. fracción XXXVI y 39 del Reglamento interior del Registro Civil del Estado de México. La firma
                        Electrónica con la que cuenta es vigente a la fecha de expedición; tiene validez jurídica y
                        probatoria de acuerdo a las disposiciones legales en la materia. </td>
                </tr>
            </table>
        </div>

        <div class="SelloFirma">
            <table class="tablaSelloFirma">
                <tr>
                    <th>Sello:</th>
                    <th>Firma Electronica:</th>
                </tr>
                <tr>
                    <td>gCKJHFjkhsdjhfdsjkhk3kfdggdfgwferwsdffdsdhfJHdsjkhk3kSDFJHffThsdjDHSKJHDDHDSAKD MEXICO
                        CHILPANCINGO JHFjkhsdjhfdsjkhk3kfJHSD</td>
                    <td>APTv6yuZoXVOlgCKJHFjkhsdjhfdsjkhk3kfJHSDFJHffThsdjhdsjkhDAPTv6yuZoXVOlgCKJHFjkhsd
                        jhfdsjkhk3kfJHSDFJHffThsdjhdsjkhD</td>
                </tr>
            </table>
        </div>
        <div class="CodigoQR">
            <img src="{{ asset('img/qr.jpg') }}" width="100">
           
        </div>
        <div class="DatosQR">
            <img src="{{ asset('img/datosAladoQR2.png') }}" width="550" height="90">
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
    
</body>
</html>