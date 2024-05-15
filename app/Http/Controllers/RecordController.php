<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class RecordController extends Controller
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
        $usuarios=User::where('role_id', '!=', 1)->get();

        return inertia('Register/Create',[
            'usuarios' => $usuarios,
            /* 'user' => $user, */
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cl_nombres'        => 'required|string|max:255',
            'cl_apellidos'      => 'required|string|max:255',
            'cl_genero'         => 'required',
            'cl_fechan'         => 'required',
            'cl_direccion'      => 'required|string|max:255',
            'cl_ciudad'         => 'required',
            'cl_condado'        => 'required',
            'cl_estado'         => 'required',
            'cl_postal'         => 'required',
            'cl_telefono'       => 'required',
            'cl_email'          => 'required|string|email|max:255',
            'cl_estatus'        => 'required',
            'cl_ssn'            => 'required',
            'cl_ingreso'        => 'required',
            'cl_banco'          => 'required',
            'cl_ruta'           => 'required',
            'cl_cuenta'         => 'required',
            'cl_user_id'         => 'required',
            'cl_acepta'         => 'required',
        ]);

        $cliente = Cliente::create([
            'user_id'   => $request->cl_user_id,
            'nombres'   => $request->cl_nombres,
            'apellidos'   => $request->cl_apellidos,
            'genero'   => $request->cl_genero,
            'fechan'   => $request->cl_fechan,
            'direccion'   => $request->cl_direccion,
            'ciudad'   => $request->cl_ciudad,
            'condado'   => $request->cl_condado,
            'estado'   => $request->cl_estado,
            'postal'   => $request->cl_postal,
            'telefono'   => $request->cl_telefono,
            'email'   => $request->cl_email,
            'estatus'   => $request->cl_estatus,
            'ssn'   => $request->cl_ssn,
            'estadocivil'   => "soltero",
            'ingreso'   => $request->cl_ingreso,
            'banco'   => $request->cl_banco,
            'ruta'   => $request->cl_ruta,
            'cuenta'   => $request->cl_cuenta,
            'dependientes'   => "no",
            'activo' => 0,
            'perfil' => 0,
        ]);

        $idultimocliente = $cliente->id;

        $cliente_ultimo = Cliente::find($idultimocliente);

        return to_route('recordnew.show' , $cliente_ultimo);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
