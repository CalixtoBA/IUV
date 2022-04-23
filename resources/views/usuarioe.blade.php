@extends('plantilla')

@section('seccion')
  <h3>Editar registro.</h3>
  <form method="post" action="{{Route('usuario.editarr')}}" class="row g-3 needs-validation" novalidate>
    @method('PUT')
    @csrf
    @foreach ($cempleado as $item)
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Identificador</label>
        <input type="identificador" class="form-control" id="validationCustom01" name="identificador" value="{{$item->IdUsuario}}" readonly>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Nombre</label>
        <input type="email" class="form-control" id="validationCustom02" name="nombre" value="{{$item->Empleado}}" readonly>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="validationCustom03" name="email" value="{{$item->EmailE}}" readonly>
      </div>
    <div class="col-md-4">
      <label for="validationCustom04" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="validationCustom04" name="contraseña" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom05" class="form-label">Confirmar contraseña</label>
      <input type="password" class="form-control" id="validationCustom05" name="ccontraseña" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom06" class="form-label">Status</label>
      <select class="form-select" id="validationCustom06" name="estatus" required>
        <option value="{{$item->IdStatus}}">{{$item->N_Status}}</option>
        @foreach ($Cstatus as $item)
          <option value="{{$item->IdStatus}}">{{$item->N_Status}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-9">
      <br>
      <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
      <button class="btn btn-outline-secondary" type="reset">Cancelar</button>
      <a href="/usuarioc" class="btn btn-outline-secondary" type="button">Salir</a>
    </div>
    @endforeach
  </form>
  <script>
  (function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
  </script>
@endsection
