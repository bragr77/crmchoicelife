<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Dependiente;
use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Client;

class DependientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dependiente = Dependiente::with('cliente')->find($id);

        return inertia('Dependientes/Show',[
            'dependiente'  => $dependiente,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dependiente = Dependiente::with('cliente')->find($id);

        return inertia('Dependientes/Edit',[
            'dependiente'  => $dependiente,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombres'        => 'required|string',
            'apellidos'      => 'required|string',
            'genero'         => 'required|string',
            'fechan'         => 'required|string',
            'relacion'       => 'required|string',
            'estatus'        => 'required|string',
            'ssn'            => 'required|string',
            'cobertura'      => 'required|string',
        ]);

        $dependiente = Dependiente::find($id);

        $dependiente->nombres = $request->nombres;
        $dependiente->apellidos= $request->apellidos;
        $dependiente->genero= $request->genero;
        $dependiente->fechan= $request->fechan;
        $dependiente->relacion= $request->relacion;
        $dependiente->estatus= $request->estatus;
        $dependiente->ssn= $request->ssn;
        $dependiente->cobertura= $request->cobertura;

        $dependiente->save();

        return to_route('dependiente.show' , $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $totaldep = 0;

        $dependientes = Dependiente::all();

        $dependiente = Dependiente::find($id);

        $clienteid = $dependiente->cliente_id;

        foreach ($dependientes as $dependiente) {
            if ($dependiente->cliente_id == $clienteid ) {
                $totaldep++;
            }
        }

        if ($totaldep == 1) {
            $clienteid = $dependiente->cliente_id;

            $cliente = Cliente::find($clienteid);

            $cliente->dependientes = "no";

            $cliente->save();
        }

        $dependiente->delete();

        /* $clienteid = $dependiente->cliente_id; */

        return to_route('clientes.show' , $clienteid);
    }

}
