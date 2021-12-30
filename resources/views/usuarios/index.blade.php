@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Usuarios registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar usuario</button></a></h2>
<table class="table table-hover">
   <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>

      <td>

          <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
          <a href="{{route('usuarios.show', $user->id)}}"><button type="button" class="btn btn-primary">Ver usuario</button></a>

          <button type="submit" class="btn btn-danger">Eliminar</button>
          @CSRF
          @method('DELETE')
      </form>
    </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</table>
</div>

@endsection
