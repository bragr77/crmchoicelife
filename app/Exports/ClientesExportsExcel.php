<?php

namespace App\Exports;

use App\Models\Cliente;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ClientesExportsExcel implements FromView
{
    public function view():View
    {
        $clientes = Cliente::with('user')->where('activo', 0)->get();

        return view('exports.clientesexcel',[
            'clientes'  => $clientes,
        ]);
    }
}
