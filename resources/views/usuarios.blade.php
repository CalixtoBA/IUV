@extends('plantilla')

@section('seccion')
  <div>
    <h3>Usuarios.</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No. empleado</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cempleado as $key)
      <tr>
        <th scope="row">{{$key->IdEmpleado}}</th>
        <td>{{$key->Empleado}}</td>
        <td>{{$key->EmailE}}</td>
        <td><a href="{{Route('usuario.nuevo', $key->IdEmpleado)}}" class="btn btn-outline-secondary" type="button">
              Nueva cuenta</a>
            <a href="usuarioc" class="btn btn-outline-secondary" type="button">Salir</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
@endsection
