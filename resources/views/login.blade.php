@extends('plantilla')

@section('seccion')
  <form>
    <div class="mb-3">
      <br>
      <label for="exampleInputEmail1" class="form-label">Usuario</label>
      <input type="email" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <br>
    <button type="submit" class="btn btn-outline-secondary">Aceptar</button>
</form>
@endsection
