<?php

use App\Http\Controllers\UsuariosController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Vista inicial
Route::view('/', 'welcome');
// Vista inicio de sesion
Route::view('login/', 'login')->name('login')->middleware('guest');
// Vista de perfil
Route::view('profile/', 'perfil')->middleware('auth');

Route::view('registro/', 'createAcount');

Route::controller(UsuariosController::class)->group(function(){
    Route::post('usuarios/usuario', 'store')->name('usuarios.store');
});

// Envio
Route::post('login', function(){
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('profile');
    }

    return redirect('/');
});

