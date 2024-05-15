<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use Illuminate\Validation\Rules;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $usuarios = User::with('role')->get();

        /* $roles=Role::where('id', '>=', 2)->get(); */

        return inertia('Usuarios/Index',[
            'usuarios'  => $usuarios,
            /* 'roles' => $roles, */
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $roles=Role::where('id', '>=', 2)->get();


        return inertia('Usuarios/Create',[
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => 'required',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'phone' => 'required',
            'npn' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'role_id' => $request->role,
            'email' => $request->email,
            'phone' => $request->phone,
            'npn' => $request->npn,
            'password' => Hash::make($request->password),
        ]);

        /* event(new Registered($user)); */

        return to_route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::with('role')->find($id);

        return inertia('Usuarios/Show',[
            'usuario'  => $usuario,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::with('role')->find($id);
        $roles=Role::where('id', '>=', 2)->get();

        return inertia('Usuarios/Edit',[
            'usuario'  => $usuario,
            'roles'  => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required',
            'npn' => 'required',
        ]);

        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->phone = $request->phone;
        $usuario->npn = $request->npn;

        $usuario->save();

        return to_route('usuarios.show' , $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = User::find($id);

        $usuario->delete();
        return to_route('usuarios.index');
    }
}
