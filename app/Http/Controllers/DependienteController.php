<?php

namespace App\Http\Controllers;

use App\Models\Dependiente;
use Illuminate\Http\Request;

class DependienteController extends Controller
{
    public function index()
    {
        $dependientes = Dependiente::with('cliente')->get();

        return inertia('Dependientes/Index',[
            'dependientes'  => $dependientes,
        ]);
    }
}
