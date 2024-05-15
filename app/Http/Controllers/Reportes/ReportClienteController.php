<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class ReportClienteController extends Controller
{
    public function planillacliente($id)
    {
        $contpdf = 1;

        $cliente = Cliente::find($id);

        $cliente->load('user');

        $conyugue = $cliente->conyugue;

        $dependientes = $cliente->dependientes()->get();

        $pdf = PDF::loadView('reportes.showcliente' , [
            'cliente' => $cliente,
            'dependientes' => $dependientes,
            'cont' => $contpdf,
        ]);

        $nombres = $cliente->nombres;
        $apellidos = $cliente->apellidos;
        $nombrearchivo = $nombres . '_' . $apellidos . '.pdf';
        //$pdf->save(public_path('pdf/' . $nombres.'_'.$apellidos.'.pdf'));

        return $pdf->stream($nombres.'_'.$apellidos.'.pdf');
    }
}
