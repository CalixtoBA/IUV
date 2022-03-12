@extends('plantilla')

@section('seccion')
  <h3>Usuarios.</h3><br>
  <div class="collapse" id="navbarToggleExternalContent">
    <nav class="navbar navbar-light bg-light">
      <form class="container-fluid justify-content-start">
        <button class="btnR" type="button">Registro</button>
        <button class="btnA" type="button">Actualizar</button>
        <button class="btnC" type="button">Consulta</button>
        <button class="btnE" type="button">Eliminar</button>
      </form>
    </nav>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
@endsection

@section('seccion2')
  <br>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <form class="d-flex">
        <input class="form-control me-2" type="search" aria-label="Search">
        <button class="btn btn-outline-secondary bg-gradient" type="submit">Buscar</button>
    </form>
  </div>
</nav>
@endsection

@section('seccion3')
  <form class="row g-3 needs-validation" novalidate>
    <br>
    <h3>Datos generales.</h3>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Apellido paterno</label>
      <input type="text" class="form-control" id="validationCustom02" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom03" class="form-label">Apellido materno</label>
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom04" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="validationCustom04" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom05" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="validationCustom05" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom06" class="form-label">Confirmar contraseña</label>
      <input type="password" class="form-control" id="validationCustom06" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom07" class="form-label">Fecha de último inicio de sesión</label>
      <input type="text" class="form-control" id="validationCustom07" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom08" class="form-label">Status</label>
      <select class="form-select" id="validationCustom08" required>
        <option selected disabled value="">Seleccionar...</option>
        @foreach ($Cstatus as $item)
          <option value="{{$item->IdStatus}}">{{$item->N_Status}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-9">
      <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
      <button class="btn btn-outline-secondary" type="reset">Cancelar</button>
      <button class="btn btn-outline-secondary" type="button">Salir</button>
    </div>
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
