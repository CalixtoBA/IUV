@extends('plantilla')

@section('seccion')
  <h3>Sucursales.</h3><br>
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
      <label for="validationCustom02" class="form-label">Tipo</label>
      <select class="form-select" id="validationCustom02" required>
        <option selected disabled value="">Seleccionar...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="validationCustom03" class="form-label">Teléfono</label>
      <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom04" class="form-label">Correo electrónico</label>
      <input type="text" class="form-control" id="validationCustom04" required>
    </div>
    <div class="col-md-4">
      <label class="form-label">Encargado</label>
      <select class="form-select">
        <option selected disabled value="">Seleccionar...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="validationCustom05" class="form-label">Status</label>
      <select class="form-select" id="validationCustom05" required>
        <option selected disabled value="">Seleccionar...</option>
        <option>...</option>
      </select>
    </div>
    <h3>Domicilio.</h3>
    <div class="col-md-4">
      <label for="validationCustom06" class="form-label">Calle</label>
      <input type="text" class="form-control" id="validationCustom06" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom07" class="form-label">Número</label>
      <input type="text" class="form-control" id="validationCustom07" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom08" class="form-label">Colonia</label>
      <input type="text" class="form-control" id="validationCustom08" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom09" class="form-label">C.P.</label>
      <input type="text" class="form-control" id="validationCustom09" required>
    </div>
    <div class="col-md-4">
      <label for="validationCustom10" class="form-label">Ciudad</label>
      <select class="form-select" id="validationCustom10" required>
        <option selected disabled value="">Seleccionar...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="validationCustom11" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom11" required>
        <option selected disabled value="">Seleccionar...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="validationCustom12" class="form-label">Pais</label>
      <input type="text" class="form-control" id="validationCustom12" required>
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
