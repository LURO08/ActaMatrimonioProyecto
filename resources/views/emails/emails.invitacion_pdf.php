<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .datos {
            margin-top: 20px;
        }

        .datos h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .datos p {
            margin-bottom: 10px;
            color: #333;
        }

        .datos strong {
            font-weight: bold;
        }

        .datos span {
            color: #555;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container invitacion" id="invitacionContainer">
        <h1>NUESTRA BODA</h1>
        <div class="datos">
            <h2>{{$novia}} & {{$novio}}</h2>
            <p>Estimados amigos y familiares:</p>
            <p>¡Los invitamos a nuestra boda, esperamos que nos puedan acompañar en
             <span id="invitacionLugar">{{ $lugar }}</span> el <span id="invitacionFecha">{{ $fecha }}</span> a las <span>{{ date('h:i A', strtotime($hora)) }}</span></p>
            
            <div style="text-align: center; width: 100%">
                <p>¡LOS ESPERAMOS!</p>
                </div> 
        </div>
    </div>
</body>
</html>
