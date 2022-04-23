@extends('plantilla')

@section('seccion')
  <div>
    <h3>Consulta de usuarios.</h3><br>
      @if (count($cusuario) == 0)
        <a href="usuarios" class="btn btn-outline-secondary" type="button">Nuevo registro</a>
        <a href="menu" class="btn btn-outline-secondary" type="button">Salir</a>
      @else
        <form class="row g-3 needs-validation" novalidate>
          <br>
          @foreach ($cusuario as $key)
            <div class="col-9 d-inline">
              <a href="usuarios" class="btn btn-outline-secondary" type="button">Nuevo registro</a>
              <a href="{{Route('usuario.editar', $key->IdUsuario)}}" class="btn btn-outline-secondary" type="button">Actualizar registro</a>
              <a class="btn btn-outline-secondary" type="button">Eliminar registro</a>
              <a href="menu" class="btn btn-outline-secondary" type="button">Salir</a>
            </div>
            <h3>Datos generales.</h3>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Identificador</label>
              <input type="text" class="form-control" id="validationCustom01" value="{{$key->IdUsuario}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="validationCustom02" value="{{$key->Uempleado}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom03" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="validationCustom03" value="{{$key->EmailE}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom04" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="validationCustom04" value="{{$key->Contraseña}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom05" class="form-label">Fecha de último inicio de sesión</label>
              <input type="text" class="form-control" id="validationCustom05" value="{{$key->F_Inicio_S}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom06" class="form-label">Status</label>
              <select class="form-select" id="validationCustom06" disabled>
                <option value="{{$key->IdStatus}}">{{$key->N_Status}}</option>
              </select>
            </div>
          @endforeach
          <br><br>
          {{ $cusuario->links() }}
        </form>
      @endif
  </div>
@endsection
