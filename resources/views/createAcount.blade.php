@extends('layouts.plantilla')

@section('title', 'Registro')

@section('content')
    <div class="container">
      <div class="w-50 m-auto">
        <h1  class="mt-6 mb-4">Registro</h1>
        <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre </label>
                <input type="text" class="form-control" name="name" id="name" >
            </div>

            <div class="mb-3">
                <label for="app" class="form-label">Apellido Paterno </label>
                <input type="text" class="form-control" name="app" id="app" >
            </div>
            <div class="mb-3">
                <label for="fn" class="form-label">Fecha de nacimiento </label>
                <input type="date" class="form-control" name="fn" id="fn" >
            </div>

            <div class="mb-3">
                <label for="gen" class="form-label">Género </label>
                <input type="text" class="form-control" name="gen" id="gen" >
            </div>

            <div class="mb-3">
                <label for="datos" class="form-label">Datos </label>
                <input type="text" class="form-control" name="datos" id="datos" >
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Correo electronico </label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña </label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
      <div> 
    </div>
@endsection
