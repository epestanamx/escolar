<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Etapa;
use App\Models\Periodo;
use App\Models\Proyecto;
use App\Models\Universidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PrintController extends Controller
{
    public function presentacion(Request $request)
    {
        $alumno = Alumno::find($request->idAlumno);
        $empresa = Empresa::find($request->idEmpresa);
        $horas = $request->horas;
        $periodo = Periodo::find($request->idPeriodo);
        $tipo = $request->tipo;
        $universidad = Universidad::find(1);

        $view =  \View::make('formatos.presentacion', compact('alumno', 'empresa', 'horas', 'periodo','tipo', 'universidad'))->render();
        $pdf = \App::make('snappy.pdf.wrapper');
        $pdf->loadHTML($view)
            ->setOption('margin-top', '3mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-bottom', '0mm')
            ->setPaper('letter');
        return $pdf->stream();
    }

    public function definicion($idProyecto)
    {
        $etapas = Etapa::where('idProyecto', '=', $idProyecto)->get();
        $proyecto = Proyecto::find($idProyecto);
        $universidad = Universidad::find(1);

        $view =  \View::make('formatos.definicion', compact('etapas', 'proyecto', 'universidad'))->render();
        $pdf = \App::make('snappy.pdf.wrapper');
        $pdf->loadHTML($view)
            ->setOption('margin-top', '3mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-bottom', '0mm')
            ->setPaper('letter');
        return $pdf->stream();
    }

    public function registro($idProyecto)
    {
        $proyecto = Proyecto::find($idProyecto);
        $universidad = Universidad::find(1);

        $view =  \View::make('formatos.registro', compact('proyecto', 'universidad'))->render();
        $pdf = \App::make('snappy.pdf.wrapper');
        $pdf->loadHTML($view)
            ->setOption('margin-top', '3mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-bottom', '0mm')
            ->setPaper('letter');
        return $pdf->stream();
    }
}
