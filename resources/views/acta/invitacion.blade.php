<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invitacion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="time"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #c83c3c;
        }

        .invitacion {
            margin-top: 20px;
            padding: 20px;
            display: none;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .invitacion h1 {
            margin-top: 0;
            text-align: center;
        }

        .invitacion p {
            margin-bottom: 10px;
        }

        .invitacion .datos {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="{{ route('invitacion.store') }}" method="GET">
            <h1>Crear Invitación</h1>
            <div style="display: none;">
                <label for="novia">Novia:</label>
                <input type="text" id="novia" name="novia" value="{{ $novia->nombre }}" required>
                <label for="novio">Novio:</label>
                <input type="text" id="novio" name="novio" value="{{ $novio->nombre }}" required>
            </div>
            <label for="lugar">Lugar:</label>
            <input type="text" id="lugar" name="lugar" required>

            <label for="dia">Día:</label>
            <select id="dia" name="dia" required>
                @for ($i = 1; $i <= 31; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <label for="mes">Mes:</label>
            <select id="mes" name="mes" required>
                <?php 
                    $meses = [
                        1 => 'Enero',
                        2 => 'Febrero',
                        3 => 'Marzo',
                        4 => 'Abril',
                        5 => 'Mayo',
                        6 => 'Junio',
                        7 => 'Julio',
                        8 => 'Agosto',
                        9 => 'Septiembre',
                        10 => 'Octubre',
                        11 => 'Noviembre',
                        12 => 'Diciembre',
                    ];
                    foreach ($meses as $numeroMes => $nombreMes): ?>
                <option value="<?php echo $nombreMes; ?>"><?php echo $nombreMes; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Crear Invitación</button>
        </form>
    </div>

</body>

</html>
