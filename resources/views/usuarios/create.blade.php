@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-5">
<form action="/usuarios" method="POST">

    @CSRF

<form>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Escriba su nombre">
        
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Escriba su Email">
        
    </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Escriba su contraseña">
  </div>
  
  <button type="submit" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-danger">Eliminar campos</button>
</form>


@endsection