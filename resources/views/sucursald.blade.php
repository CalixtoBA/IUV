@extends('plantilla')

@section('seccion')
  <div id="S3">
    <h3>Sucursal a eliminar.</h3><br>
    <form action="{{Route('sucursal.eliminarr')}}" method="post" class="row g-3 needs-validation" novalidate>
      @method('PUT')
      @csrf
      @foreach ($esucursal as $key)
      <br>
      <h3>Datos generales.</h3>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Identificador</label>
        <input type="text" name="IdSucursal" class="form-control" value="{{$key->IdSucursal}}" readonly>
      </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" name="NombreTienda" class="form-control" id="validationCustom01" value="{{$key->NombreTienda}}" required readonly>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Tipo</label>
          <select class="form-select"  name="IdTipoTienda" id="validationCustom02" required disabled="true">
              <option value="{{$key->IdTipoTienda}}">{{$key->Tipo}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom03" class="form-label">Teléfono</label>
          <input type="text" name="TelefonoTienda" class="form-control" id="validationCustom03" value="{{$key->TelefonoTienda}}" required readonly>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Correo electrónico</label>
          <input type="text" name="EmailTienda" class="form-control" id="validationCustom04" value="{{$key->EmailTienda}}" required readonly>
        </div>
        <div class="col-md-4">
          <label class="form-label">Encargado</label>
          <select name="IdEmpleado" class="form-select" disabled="true">
            <option value="{{$key->IdEmpleado}}">{{$key->Encargado}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">Status</label>
          <select class="form-select" name="IdStatus" id="validationCustom05" required disabled="true">
            <option value="{{$key->IdStatus}}">{{$key->N_Status}}</option>
          </select>
        </div>
        <h3>Domicilio.</h3>
        <div class="col-md-4">
          <label for="validationCustom06" class="form-label">Calle</label>
          <input type="text" name="D_calle" class="form-control" id="validationCustom06" value="{{$key->D_calle}}" required readonly>
        </div>
        <div class="col-md-4">
          <label for="validationCustom07" class="form-label">Número</label>
          <input type="text" name="D_numero" class="form-control" id="validationCustom07" value="{{$key->D_numero}}" required readonly>
        </div>
        <div class="col-md-4">
          <label for="validationCustom08" class="form-label">Colonia</label>
          <input type="text" name="D_colonia" class="form-control" id="validationCustom08" value="{{$key->D_colonia}}" required readonly>
        </div>
        <div class="col-md-4">
          <label for="validationCustom09" class="form-label">C.P.</label>
          <input type="text" name="D_cp" class="form-control" id="validationCustom09" value="{{$key->D_cp}}" required readonly>
        </div>
        <div class="col-md-4">
          <label for="validationCustom10" class="form-label">Ciudad</label>
          <select class="form-select" name="IdCiudad" id="validationCustom10" required disabled="true">
            <option value="{{$key->IdCiudad}}">{{$key->N_Ciudad}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom11" class="form-label">Estado</label>
          <select class="form-select" name="IdEstado" id="validationCustom11" required disabled="true">
            <option value="{{$key->IdEstado}}">{{$key->N_Estado}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom12" class="form-label">Pais</label>
          <select class="form-select" name="IdPais" id="validationCustom12" required disabled="true">
            <option value="{{$key->IdPais}}">{{$key->N_Pais}}</option>
          </select>
        </div>
      @endforeach

      <div class="col-9">
        <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
        <a href="/sucursalc" class="btn btn-outline-secondary" type="button">Salir</a>
      </div>
    </form>
  </div>

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
