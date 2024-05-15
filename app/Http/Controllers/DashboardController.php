<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $user = auth()->user();

        //$clientecount = Cliente::where('user_id', $user->id)->count();
        $clientecount = User::find($user->id)->clientes()->where('activo', 0)->count();

        $users = User::where('role_id', '!=', 1)->withCount(
            ['clientes' => function ($query){
                $query->where('activo', 0);
            }])->get();

        $totalclientes = Cliente::where('activo', 0)->count();


        return inertia('Home/Dashboard',[
            'users'  => $users,
            'user'  => $user,
            'clientecount'  => $clientecount,
            'totalclientes'  => $totalclientes,
        ]);

    }



}
