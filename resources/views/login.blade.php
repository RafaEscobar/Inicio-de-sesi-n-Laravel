@extends('layouts.plantilla')

@section('title', 'Inicio de sesion')

@section('content')
    <div class="container">
        <h1>Inicio de sesion</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo electronico: </label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña: </label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
          </form>
    </div>
@endsection