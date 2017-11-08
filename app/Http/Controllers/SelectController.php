<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\AsesorAcademico;
use App\Models\AsesorEmpresarial;
use App\Models\Carrera;
use App\Models\Empresa;
use App\Models\Periodo;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function carreras(Request $request)
    {
        $term = $request->term ?: '';
        $elementos = Carrera::where('nombre', 'like', '%'.$term.'%')->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->nombre]);
        }

        return json_encode($validos);
    }

    public function alumnos(Request $request)
    {
        $term = $request->term ?: '';
        $elementos = Alumno::where('nombres', 'like', '%'.$term.'%')
            ->orWhere('apellidos', 'like', '%'.$term.'%')->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->nombres . ' ' . $elemento->apellidos]);
        }

        return json_encode($validos);
    }

    public function empresas(Request $request)
    {
        $term = $request->term ?: '';
        $elementos = Empresa::where('nombre', 'like', '%'.$term.'%')->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->nombre]);
        }

        return json_encode($validos);
    }

    public function asesoresEmpresariales(Request $request)
    {
        $term = $request->term ?: '';
        $empresa = $request->empresa ?: '';

        $elementos = AsesorEmpresarial::where(function ($query) use ($term, $empresa) {
            $query->where('nombres', 'like', '%'.$term.'%')
                ->orWhere('apellidos', 'like', '%'.$term.'%');
        })->where('idEmpresa', '=', $empresa)->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->nombres . ' ' . $elemento->apellidos]);
        }

        return json_encode($validos);
    }

    public function asesoresAcademicos(Request $request)
    {
        $term = $request->term ?: '';
        $elementos = AsesorAcademico::where('nombres', 'like', '%'.$term.'%')
            ->orWhere('apellidos', 'like', '%'.$term.'%')->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->nombres . ' ' . $elemento->apellidos]);
        }

        return json_encode($validos);
    }

    public function proyectos(Request $request)
    {
        $term = $request->term ?: '';
        $elementos = Proyecto::where('nombre', 'like', '%'.$term.'%')->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->nombre . ' (' . $elemento->empresa->nombre . ')']);
        }

        return json_encode($validos);
    }

    public function periodos(Request $request)
    {
        $term = $request->term ?: '';
        $elementos = Periodo::where('fecha_inicio', 'like', '%'.$term.'%')
            ->orWhere('fecha_fin', 'like', '%'.$term.'%')->get();

        $validos = [];

        foreach ($elementos as $elemento) {
            array_push($validos, ['id' => $elemento->id, 'text' => $elemento->fecha_inicio . ' - ' . $elemento->fecha_fin]);
        }

        return json_encode($validos);
    }
}
