<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carta de Presentacion</title>
    <style>
        @page {
            size: letter;
        }

        body {
            font-family: sans-serif;
            position: relative;
            width: 210mm;
            height: 290mm;
            margin: 0 auto;
            color: #001028;
            background: url("{{ public_path('images/fondo.jpg') }}") no-repeat center center fixed;
            background-size:cover;
            font-size: 14px;
        }

        #encabezado {
            padding-top: 2.4cm;
            padding-left: 5cm;
            font-size: 13px;
            font-weight: bold;
        }

        #cuerpo {
            padding-top: 1.2cm;
            padding-left: 2cm;
        }

        #presente {
            font-weight: bold;
            font-size: 14px;
        }

        #presente p {
            text-transform: uppercase;
        }

        #contenido {
            padding-top: 1cm;
            font-size: 14px;
            padding-right: 2cm;
            text-align: justify;
        }

        #atentamente {
            padding-top: 1.5cm;
        }

        #mini {
            padding-top: 1cm;
            font-size: 10px;
        }
    </style>
</head>
<body>
<div id="encabezado">
    <p>
        {{ $universidad->nombre }}
        <br>
        Dirección de Vinculación, Difusión y Extensión Universitaria
    </p>
    <p>
        Asunto: Carta de Presentación para programa de {{ $carta->tipo }}
        <br>
        Cancún, Quintana Roo, ({{ \Carbon\Carbon::now()->format('d/m/Y') }}).
    </p>
</div>
<div id="cuerpo">
    <div id="presente">
        <p>
            {{ $carta->empresa->titulo . ' ' . $carta->empresa->responsable_rh }}
            <br>
            Jefe de recursos humanos
            <br>
            {{ $carta->empresa->nombre }}
            <br>
            P R E S E N T E
        </p>
    </div>
    <div id="contenido">
        <p>
            Reciba por este medio un cordial saludo, el motivo de esta carta es  presentarle a <b>{{ $carta->alumno->nombres . ' ' . $carta->alumno->apellidos }}</b>,
            quien es alumno regular de la Universidad Politécnica de Quintana Roo, con número de matrícula <b>{{ $carta->alumno->matricula }}</b>,
            quien durante el periodo <b>{{ $carta->periodo->fecha_inicio . ' - ' . $carta->periodo->fecha_fin }}</b>, cursa el <b>{{ $carta->alumno->cuatrimestre }}°</b> cuatrimestre de estudios del Programa Educativo
            de <b>{{ $carta->alumno->carrera->nombre }}</b>.
            <br>
            <br>
            <br>
            De igual forma solicito a usted,  atentamente su anuencia a fin de que al estudiante antes citado  se le permita realizar en ese prestigiado organismo su programa de Estancia reglamentaria, misma que comprende un total de <b>{{ $carta->horas }}</b>, horas y cuyo objetivo es que el alumno realice actividades de práctica en el campo laboral, vinculadas a las competencias adquiridas durante el ciclo de formación previo al programa, así como el desarrollo de un proyecto acorde  a los requerimientos de su  empresa o institución.
            <br>
            <br>
            <br>
            Esperando contar con su valioso apoyo, que sin duda permitirá que nuestro alumno fortalezca los conocimientos adquiridos en su formación como futuro profesionista, quedo de usted.
        </p>
    </div>
    <div id="atentamente">
        <p>
            <b>
                ATENTAMENTE
                <br>
                <br>
                <br>
                {{ $universidad->jefe_vinculacion_titulo . ' ' . $universidad->jefe_vinculacion_nombres . ' ' . $universidad->jefe_vinculacion_apellidos }}<br>
                Director de Vinculación, Difusión y<br>
                Extensión Universitaria.
            </b>
        </p>

        <p id="mini">
            C.c.p   Expediente del alumno.
            <br>
            C.c.p.  Minutario
        </p>
    </div>
</div>
</body>
</html>
