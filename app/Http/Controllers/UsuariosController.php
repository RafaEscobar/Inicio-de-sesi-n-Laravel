<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function store(Request $request){
        $registro = new User();

        $registro->name = $request->name;
        $registro->app = $request->app;
        $registro->fn = $request->fn;
        $registro->gen = $request->gen;
        $registro->datos = $request->datos;    
        $registro->email = $request->email;
        $registro->password = $request->password;

        $registro->save();

        return redirect('profile/');
    }
}
