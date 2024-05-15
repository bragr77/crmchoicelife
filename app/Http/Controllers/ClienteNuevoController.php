<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Conyugue;
use App\Models\Dependiente;
use Illuminate\Http\Request;

class ClienteNuevoController extends Controller
{
    public function show($id){

        $cliente = Cliente::find($id);

        $conyugue = $cliente->conyugue;

        $dependientes = $cliente->dependientes()->get();

        return inertia('Clientes/Nuevo',[
            'cliente'  => $cliente,
            'dependientes'  => $dependientes,
            'conyugue'  => $conyugue,
        ]);
    }

    public function createconyugue($id){

        $cliente = Cliente::find($id);

        return inertia('Clientes/CreateConyugue',[
            'cliente'  => $cliente,
        ]);
    }

    public function storeconyugue(Request $request, $id){

        $request->validate([
            'cy_nombres'        => 'required|string',
            'cy_apellidos'      => 'required|string',
            'cy_genero'         => 'required|string',
            'cy_fechan'         => 'required|string',
            'cy_estatus'        => 'required|string',
            'cy_ssn'            => 'required|string',
        ]);

        $conyugue = Conyugue::create([
            'cliente_id'   => $id,
            'nombres' => $request->cy_nombres,
            'apellidos' => $request->cy_apellidos,
            'genero' => $request->cy_genero,
            'fechan' => $request->cy_fechan,
            'estatus' => $request->cy_estatus,
            'ssn' => $request->cy_ssn,

        ]);

        $cliente = Cliente::find($id);

        $cliente->estadocivil = "casado";

        $cliente->save();

        return to_route('nuevocliente.show' , $id);
    }

    public function createconyugue2($id){

        $cliente = Cliente::find($id);

        return inertia('Conyugue/Create',[
            'cliente'  => $cliente,
        ]);
    }

    public function storeconyugue2(Request $request, $id){

        $request->validate([
            'cy_nombres'        => 'required|string',
            'cy_apellidos'      => 'required|string',
            'cy_genero'         => 'required|string',
            'cy_fechan'         => 'required|string',
            'cy_estatus'        => 'required|string',
            'cy_ssn'            => 'required|string',
        ]);

        $conyugue = Conyugue::create([
            'cliente_id'   => $id,
            'nombres' => $request->cy_nombres,
            'apellidos' => $request->cy_apellidos,
            'genero' => $request->cy_genero,
            'fechan' => $request->cy_fechan,
            'estatus' => $request->cy_estatus,
            'ssn' => $request->cy_ssn,

        ]);

        $cliente = Cliente::find($id);

        $cliente->estadocivil = "casado";

        $cliente->save();

        return to_route('clientes.show' , $id);
    }


    public function createdependiente($id){

        $cliente = Cliente::find($id);

        return inertia('Clientes/CreateDependiente',[
            'cliente'  => $cliente,
        ]);
    }

    public function storedependiente(Request $request, $id){

        $request->validate([
            'dp_nombres'        => 'required|string',
            'dp_apellidos'      => 'required|string',
            'dp_genero'         => 'required|string',
            'dp_fechan'         => 'required|string',
            'dp_relacion'         => 'required|string',
            'dp_estatus'        => 'required|string',
            'dp_ssn'            => 'required|string',
            'dp_cobertura'      => 'required|string',
        ]);

        $dependiete = Dependiente::create([
            'cliente_id'   => $id,
            'nombres' => $request->dp_nombres,
            'apellidos' => $request->dp_apellidos,
            'genero' => $request->dp_genero,
            'fechan' => $request->dp_fechan,
            'relacion' => $request->dp_relacion,
            'estatus' => $request->dp_estatus,
            'ssn' => $request->dp_ssn,
            'cobertura' => $request->dp_cobertura,

        ]);

        $cliente = Cliente::find($id);

        $cliente->dependientes = "si";

        $cliente->save();

        return to_route('nuevocliente.show' , $id);
    }

    public function createdependiente2($id){

        $cliente = Cliente::find($id);

        return inertia('Dependientes/Create',[
            'cliente'  => $cliente,
        ]);
    }

    public function storedependiente2(Request $request, $id){

        $totaldep = 0;

        $dependientes = Dependiente::all();

        foreach ($dependientes as $dependiente) {
            if ($dependiente->cliente_id == $id ) {
                $totaldep++;
            }
        }

        if ($totaldep == 0) {
            $clienteid = $id;

            $cliente = Cliente::find($clienteid);

            $cliente->dependientes = "si";

            $cliente->save();
        }


        $request->validate([
            'dp_nombres'        => 'required|string',
            'dp_apellidos'      => 'required|string',
            'dp_genero'         => 'required|string',
            'dp_fechan'         => 'required|string',
            'dp_relacion'         => 'required|string',
            'dp_estatus'        => 'required|string',
            'dp_ssn'            => 'required|string',
            'dp_cobertura'      => 'required|string',
        ]);


        $dependiete = Dependiente::create([
            'cliente_id'   => $id,
            'nombres' => $request->dp_nombres,
            'apellidos' => $request->dp_apellidos,
            'genero' => $request->dp_genero,
            'fechan' => $request->dp_fechan,
            'relacion' => $request->dp_relacion,
            'estatus' => $request->dp_estatus,
            'ssn' => $request->dp_ssn,
            'cobertura' => $request->dp_cobertura,

        ]);

        return to_route('clientes.show' , $id);
    }
}
