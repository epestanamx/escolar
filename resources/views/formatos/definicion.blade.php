<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Definición de proyecto</title>
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
            padding-left: 7cm;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
        }

        #cuerpo {
            padding-top: .5cm;
            padding-left: 2cm;
            font-size: 10px;
        }

        #cuerpo p {
            padding-right: 2cm;
            text-align: justify;
        }

        #aprendizaje {
            margin-top: 0.5cm;
        }

        #aprendizaje,
        #aprendizaje th,
        #aprendizaje td,
        #asignaturas,
        #asignaturas th,
        #asignaturas td,
        #etapas,
        #etapas th,
        #etapas td{
            border: solid 1px black;
        }

        #datos {
            margin-top: .7cm;
            margin-bottom: 0.2cm;
        }



        #datos th {
            font-size: 8px;
            background-color: white;
            height: 16px;
            padding-left: 5px;
        }

        #aprendizaje th,
        #asignaturas th,
        #etapas th {
            height: 16px;
            background-color: #9d9d9d;
            padding: 5px;
        }

        #aprendizaje td,
        #asignaturas td,
        #etapas td {
            padding: 5px;
        }

        #asignaturas {
            margin-top: 0.5cm;
            margin-left: 1.8cm;
        }

        #firmas {
            margin-top: 1cm;
            text-align: center;
        }

        .firma {
            margin-left: 1cm;
            margin-right: 1cm;
            background-color: black;
            border: solid 1px black;
        }

        .center {
            text-align: center;
        }

    </style>
</head>
<body>
<div id="encabezado">
    <p>
        Definición de proyecto
    </p>
</div>
<div id="cuerpo">
    <table id="datos" border="1" cellpadding="0" cellspacing="0" width="90%" style="border-collapse:collapse;">
        <tr align="center" valign="middle">
            <th rowspan="3">Datos del alumno</th>
            <th colspan="1" align="left">Nombre del alumno: {{ $proyecto->alumno->nombres . ' ' . $proyecto->alumno->apellidos }}</th>
            <th rowspan="3">Datos de la empresa</th>
            <th colspan="1" align="left">Nombre de la empresa: {{ $proyecto->empresa->nombre }}</th>
        </tr>
        <tr align="left" valign="middle">
            <th>Grupo: {{ $proyecto->alumno->grupo }}</th>
            <th>Asesor empresarial: {{ $proyecto->asesorEmpresarial->titulo . ' ' . $proyecto->asesorEmpresarial->nombres . ' ' . $proyecto->asesorEmpresarial->apellidos }}</th>

        </tr>
        <tr align="left" valign="middle">
            <th>Asesor academico: {{ $proyecto->asesorAcademico->titulo . ' ' . $proyecto->asesorAcademico->nombres . ' ' . $proyecto->asesorAcademico->apellidos }}</th>
            <th>Puesto: Asesor empresarial</th>
        </tr>
    </table>

    <p>
        <b>Nombre del proyecto: </b> {{ $proyecto->nombre }}
        <br>
        <b>Objetivos del proyecto: </b> {{ $proyecto->objetivos }}
    </p>

    <table id="etapas" border="1" cellpadding="0" cellspacing="0" width="90%" style="border-collapse:collapse;">
        <tr>
            <th>Descripción de etapas del proyecto</th>
            <th>Semana</th>
            <th>Horas</th>
            <th>Descripción de competencias</th>
        </tr>
        @foreach($proyecto->etapas as $etapa)
            <tr>
                <td>{{ $etapa->descripcion }}</td>
                <td class="center">{{ $etapa->semana }}</td>
                <td>{{ $etapa->horas }}</td>
                <td>{{ $etapa->competencias }}</td>
            </tr>
        @endforeach
    </table>

    <table id="aprendizaje" border="1" cellpadding="0" cellspacing="0" width="90%" style="border-collapse:collapse;">
        <tr>
            <th>Actividades de aprendizaje</th>
            <th>Resultados de aprendizaje</th>
            <th>Evidencias</th>
            <th>Instrumentos de evaluacion</th>
        </tr>
        <tr>
            <td>{{ $proyecto->actividades_aprendizaje }}</td>
            <td>{{ $proyecto->resultados_aprendizaje }}</td>
            <td>{{ $proyecto->evidencias }}</td>
            <td>{{ $proyecto->instrumentos_evaluacion }}</td>
        </tr>
    </table>

    <table id="asignaturas" border="1" cellpadding="0" cellspacing="0" width="70%" style="border-collapse:collapse;">
        <tr>
            <th>Asignaturas</th>
            <th>Tópicos recomendados</th>
            <th>Estrategias didácticas</th>
        </tr>
        <tr>
            <td>{{ $proyecto->asignaturas }}</td>
            <td>{{ $proyecto->topicos_recomendados }}</td>
            <td>{{ $proyecto->estrategias_didacticas }}</td>
        </tr>
    </table>

    <table id="firmas" cellpadding="0" cellspacing="0" width="90%" style="border-collapse:collapse; table-layout:fixed;">
        <tr>
            <td>
                <hr class="firma">
                {{ $proyecto->asesorEmpresarial->titulo . ' ' . $proyecto->asesorEmpresarial->nombres . ' ' . $proyecto->asesorEmpresarial->apellidos }}
                <br>
                Asesor empresarial
                <br>
                {{ $proyecto->empresa->nombre }}
            </td>
            <td>
                <hr class="firma">
                {{ $proyecto->asesorAcademico->titulo . ' ' . $proyecto->asesorAcademico->nombres . ' ' . $proyecto->asesorAcademico->apellidos }}
                <br>
                Asesor academico
                <br>
                {{ $proyecto->alumno->carrera->nombre }}
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
                <br>
                <hr class="firma">
                {{ $proyecto->alumno->nombres . ' ' . $proyecto->alumno->apellidos }}
                <br>
                {{ $proyecto->alumno->carrera->nombre }}

            </td>
            <td>
                <br>
                Fecha: Cancún, Quintana Roo ({{ \Carbon\Carbon::now()->format('d/m/Y') }})
                <hr class="firma">
                Localidad, Estado. ({{ \Carbon\Carbon::now()->format('d/m/Y') }})
            </td>
        </tr>
    </table>

</div>
</body>
</html>