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
            padding-left: 5cm;
            font-size: 13px;
            font-weight: bold;
        }

        #titulo {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            padding-left: 3cm;
        }

        #cuerpo {
            padding-top: .5cm;
            padding-left: 8px;
            font-size: 14px;
        }

        #cuerpo p {
            padding-right: 2cm;
            text-align: justify;
        }

        #datos-alumnos th,
        #datos-empresa th,
        #datos-asesor-empresarial th,
        #datos-asesor-academico th,
        #datos-proyecto th {
            height: 25px;
            background-color: #9d9d9d;
            font-size: 16px;
            font-weight: bold;
            text-align: left;
            padding-left: 5px;
        }

        #datos-alumnos td,
        #datos-empresa td,
        #datos-asesor-empresarial td,
        #datos-asesor-academico td,
        #datos-proyecto td {
            padding: 5px;
        }

        #firmas {
            margin-top: 2cm;
            text-align: center;
            font-size: 10px;
        }

        .firma {
            margin-left: 1cm;
            margin-right: 1cm;
            background-color: black;
            border: solid 1px black;
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
    <p id="titulo">
        Cedula de registro
    </p>
</div>
<div id="cuerpo">
    <table id="datos-alumnos" border="0" cellpadding="0" cellspacing="0" width="99%" style="border-collapse:collapse;">
        <tr>
            <th colspan="3">Datos del alumno</th>
        </tr>
        <tr>
            <td colspan="2">
                <b>Nombre:</b> {{ $proyecto->alumno->nombres . ' ' . $proyecto->alumno->apellidos }}
            </td>
            <td>
                <b>Tel: </b>{{ $proyecto->alumno->telefono }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Matricula: </b>{{ $proyecto->alumno->matricula }}
            </td>
            <td>
                <b>Carrera: </b> {{ $proyecto->alumno->carrera->nombre }}
            </td>
            <td>
                <b>Email: </b> {{ $proyecto->alumno->email }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Número de seguro social: </b> {{ $proyecto->alumno->nss }}
            </td>
        </tr>
    </table>

    <table id="datos-empresa" border="0" cellpadding="0" cellspacing="0" width="99%" style="border-collapse:collapse;">
        <tr>
            <th colspan="3">Datos de la empresa</th>
        </tr>
        <tr>
            <td>
                <b>Nombre:</b> {{ $proyecto->empresa->nombre }}
            </td>
            <td>
                <b>Giro: </b>{{ $proyecto->empresa->giro_comercial }}
            </td>
            <td>
                <b>Tipo: </b>{{ $proyecto->empresa->tipo }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Dirección: </b>{{ $proyecto->empresa->dirección }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Responsable de recursos humanos: </b>{{ $proyecto->empresa->titulo . ' ' . $proyecto->empresa->responsable_rh }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Telefono: </b> {{ $proyecto->empresa->telefono }}
            </td>
            <td>
                <b>Extensión: </b> {{ $proyecto->empresa->extension }}
            </td>
            <td>
                <b>Email: </b> correo@empresa.com
            </td>
        </tr>
    </table>

    <table id="datos-asesor-empresarial" border="0" cellpadding="0" cellspacing="0" width="99%" style="border-collapse:collapse;">
        <tr>
            <th colspan="3">Datos del asesor empresarial</th>
        </tr>
        <tr>
            <td>
                <b>Nombre:</b> {{ $proyecto->asesorEmpresarial->titulo . ' ' . $proyecto->asesorEmpresarial->nombres . ' ' . $proyecto->asesorEmpresarial->apellidos }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Puesto: </b>Asesor empresarial
            </td>
            <td>
                <b>Telefono: </b>{{ $proyecto->asesorEmpresarial->telefono }}
            </td>
            <td>
                <b>Email: </b> {{ $proyecto->asesorEmpresarial->email}}
            </td>
        </tr>
    </table>

    <table id="datos-asesor-academico" border="0" cellpadding="0" cellspacing="0" width="99%" style="border-collapse:collapse;">
        <tr>
            <th colspan="3">Datos del asesor académico</th>
        </tr>
        <tr>
            <td>
                <b>Nombre:</b> {{ $proyecto->asesorAcademico->titulo . ' ' . $proyecto->asesorAcademico->nombres . ' ' . $proyecto->asesorAcademico->apellidos }}
            </td>
        </tr>
        <tr>
            <td>
                <b>Email: </b>{{ $proyecto->asesorAcademico->email }}
            </td>
            <td rowspan="2">
                Firma
            </td>
        </tr>
        <tr>
            <td>
                <b>Telefono: </b>{{ $proyecto->asesorAcademico->telefono }}
            </td>

        </tr>
    </table>

    <table id="datos-proyecto" border="0" cellpadding="0" cellspacing="0" width="99%" style="border-collapse:collapse;">
        <tr>
            <th colspan="3">Datos del proyecto</th>
        </tr>
        <tr>
            <td>
                <b>Nombre del proyecto:</b> {{ $proyecto->nombre }}
            </td>
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
                {{ $proyecto->empresa->titulo . ' ' . $proyecto->empresa->responsable_rh }}
                <br>
                Jefe de recursos humanos
                <br>
                {{ $proyecto->empresa->nombre }}
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
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
                <br>
                <br>
                <br>
                <hr class="firma">
                Departamento de gestión empresarial
            </td>
        </tr>
    </table>
</div>
</body>
</html>