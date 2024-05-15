<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Conyugue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $id = $user->id;
        $role = $user->role_id;

        if ($role === 1) {
            /* $clientes = Cliente::with('user')->get(); */
            $clientes = Cliente::with('user')->where('activo', 0)->get();

            return inertia('Clientes/Index',[
                'clientes'  => $clientes,
            ]);
        }

        if ($role === 2) {
            /* $clientes = Cliente::with('user')->get(); */
            $clientes = Cliente::with('user')->where('activo', 0)->get();

            return inertia('Clientes/Index',[
                'clientes'  => $clientes,
            ]);
        }

        if ($role == 3) {

            $clientes = Cliente::with('user')->where('user_id', $id)->where('activo', 0)->get();

            return inertia('Clientes/Index',[
                'clientes'  => $clientes,
            ]);
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        $usuarios=User::where('role_id', '=', 3)->get();

        /* $usuarios=User::where('role_id', '=', 3)->get(); */

        return inertia('Clientes/Create',[
            'usuarios' => $usuarios,
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = auth()->user();

        $id_role = $user->role_id;

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
            'cl_acepta'         => 'required',
        ]);

        $cliente = Cliente::create([
            'user_id'   => $user->id,
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

        return to_route('nuevocliente.show' , $cliente_ultimo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        $cliente->load('user');

        $conyugue = $cliente->conyugue;

        $dependientes = $cliente->dependientes()->get();

        $archivopdf = $cliente->nombres."_".$cliente->apellidos.".pdf";

        $archivopdf = $cliente->nombres."_".$cliente->apellidos.".pdf";

        $archivo = "pdf/$archivopdf";
        $rutaPDF = "http://crmstarsseguros.test/pdf/$archivopdf";
        //$rutaPDF = "https://crm.starsseguros.com//laravel/public/pdf/$archivopdf";

        if (File::exists($archivo)) {
            $mostrarboton = 1;
        }else{
            $mostrarboton = 0;
        }

        return inertia('Clientes/Show',[
            'cliente'  => $cliente,
            'dependientes'  => $dependientes,
            'conyugue'  => $conyugue,
            'rutaPDF'  => $rutaPDF,
            'mostrarboton'  => $mostrarboton,
        ]);
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
    public function destroy($id)
    {
        /* $cliente->delete(); */

        $cliente = cliente::find($id);

        $cliente->activo = 1;

        $cliente->save();
        return to_route('clientes.index');
    }

}
