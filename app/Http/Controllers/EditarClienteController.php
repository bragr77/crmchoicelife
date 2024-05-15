<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Conyugue;
use App\Models\User;
use Illuminate\Http\Request;

class EditarClienteController extends Controller
{
    public function editdatos($id)
    {
        $cliente = Cliente::find($id);
        $usuarios=User::where('role_id', '!=', 1)->get();

        return inertia('Clientes/EditDatosCliente',[
            'cliente'  => $cliente,
            'usuarios'  => $usuarios,
        ]);
    }

    public function editfinanzas($id)
    {
        $cliente = Cliente::find($id);

        return inertia('Clientes/EditFinanzasCliente',[
            'cliente'  => $cliente,
        ]);
    }

    public function editconyugue($id)
    {
        $cliente = Cliente::find($id);

        $conyugue = $cliente->conyugue;

        return inertia('Conyugue/Edit',[
            'cliente'  => $cliente,
            'conyugue'  => $conyugue,
        ]);
    }

    public function updatedatos(Request $request,  $id)
    {

        $request->validate([
            'nombres'        => 'required|string|max:255',
            'apellidos'      => 'required|string|max:255',
            'genero'         => 'required',
            'fechan'         => 'required',
            'direccion'      => 'required|string|max:255',
            'ciudad'         => 'required',
            'condado'        => 'required',
            'estado'         => 'required',
            'postal'         => 'required',
            'telefono'       => 'required',
            'email'          => 'required|string|email|max:255',
            'estatus'        => 'required',
            'ssn'            => 'required',
            'user_id'            => 'required',
        ]);

        $cliente = cliente::find($id);

        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->genero = $request->genero;
        $cliente->fechan = $request->fechan;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->condado = $request->condado;
        $cliente->estado = $request->estado;
        $cliente->postal = $request->postal;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->estatus = $request->estatus;
        $cliente->ssn = $request->ssn;
        $cliente->user_id = $request->user_id;

        $cliente->save();

        return to_route('clientes.show' , $id);
    }

    public function updatefinanzas(Request $request,  $id)
    {

        $request->validate([
            'ingreso'        => 'required|string|max:255',
            'banco'      => 'required|string|max:255',
            'ruta'         => 'required',
            'cuenta'         => 'required',
        ]);

        $cliente = cliente::find($id);

        $cliente->ingreso = $request->ingreso;
        $cliente->banco = $request->banco;
        $cliente->ruta = $request->ruta;
        $cliente->cuenta = $request->cuenta;

        $cliente->save();

        return to_route('clientes.show' , $id);
    }

    public function updateconyugue(Request $request,  $id)
    {

        $request->validate([
            'nombres'        => 'required|string',
            'apellidos'      => 'required|string',
            'genero'         => 'required|string',
            'fechan'         => 'required|string',
            'estatus'        => 'required|string',
            'ssn'            => 'required|string',
        ]);

        $conyugue = Conyugue::find($id);

        $conyugue->nombres = $request->nombres;
        $conyugue->apellidos= $request->apellidos;
        $conyugue->genero= $request->genero;
        $conyugue->fechan= $request->fechan;
        $conyugue->estatus= $request->estatus;
        $conyugue->ssn= $request->ssn;

        $conyugue->save();

        $clienteid = $conyugue->cliente_id;

        return to_route('clientes.show' , $clienteid);
    }

    public function destroyconyugue($id)
    {
        $conyugue = Conyugue::find($id);

        $conyugue->delete();

        $clienteid = $conyugue->cliente_id;

        $cliente = Cliente::find($clienteid);

        $cliente->estadocivil = "soltero";

        $cliente->save();

        return to_route('clientes.show' , $clienteid);
    }
}
