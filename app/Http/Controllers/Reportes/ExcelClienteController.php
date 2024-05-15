<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ClientesExportsExcel;

use Maatwebsite\Excel\Facades\Excel;

class ExcelClienteController extends Controller
{
    public function excel()
    {
        return Excel::download(new ClientesExportsExcel, 'ClientesActivos.xlsx');
        /* return("descargar reporte excel"); */
    }
}
