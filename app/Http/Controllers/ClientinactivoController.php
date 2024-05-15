<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientinactivoController extends Controller
{
    public function index()
    {

        $clientes = Cliente::with('user')->where('activo', 1)->get();

        return inertia('Clientes/ClientInactivos',[
            'clientes'  => $clientes,
        ]);

    }

    public function active($id)
    {
        /* $cliente->delete(); */

        $cliente = cliente::find($id);

        $cliente->activo = 0;

        $cliente->save();
        return to_route('clientinactivo.index');
    }
}
