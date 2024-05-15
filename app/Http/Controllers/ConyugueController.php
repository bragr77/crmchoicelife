<?php

namespace App\Http\Controllers;

use App\Models\Conyugue;
use Illuminate\Http\Request;

class ConyugueController extends Controller
{
    public function index()
    {
        $conyugues = Conyugue::with('cliente')->get();

        return inertia('Conyugue/Index',[
            'conyugues'  => $conyugues,
        ]);
    }
}
