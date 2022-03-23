@extends('plantilla')

@section('seccion')
  <div id="S3">
    <h3>Sucursales.</h3><br>
    <form action="{{Route('sucursal.actualizarr')}}" method="post" class="row g-3 needs-validation" novalidate>
      @method('PUT')
      @csrf
      @foreach ($asucursal as $key)
      <br>
      <h3>Datos generales.</h3>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Identificador</label>
        <input type="text" name="IdSucursal" class="form-control" value="{{$key->IdSucursal}}" readonly>
      </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" name="NombreTienda" class="form-control" id="validationCustom01" value="{{$key->NombreTienda}}" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Tipo</label>
          <select class="form-select"  name="IdTipoTienda" id="validationCustom02" required>
              <option value="{{$key->IdTipoTienda}}">{{$key->Tipo}}</option>
              @foreach ($Csucursal as $item)
                <option value="{{$item->IdTipoTienda}}">{{$item->Tipo}}</option>
              @endforeach
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom03" class="form-label">Teléfono</label>
          <input type="text" name="TelefonoTienda" class="form-control" id="validationCustom03" value="{{$key->TelefonoTienda}}" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Correo electrónico</label>
          <input type="text" name="EmailTienda" class="form-control" id="validationCustom04" value="{{$key->EmailTienda}}" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Encargado</label>
          <select name="IdEmpleado" class="form-select">
            <option selected disabled value="">Seleccionar...</option>
            <option value="0">...</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">Status</label>
          <select class="form-select" name="IdStatus" id="validationCustom05" required>
            <option value="{{$key->IdStatus}}">{{$key->N_Status}}</option>
            @foreach ($Cstatus as $item1)
              <option value="{{$item1->IdStatus}}">{{$item1->N_Status}}</option>
            @endforeach
          </select>
        </div>
        <h3>Domicilio.</h3>
        <div class="col-md-4">
          <label for="validationCustom06" class="form-label">Calle</label>
          <input type="text" name="D_calle" class="form-control" id="validationCustom06" value="{{$key->D_calle}}" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom07" class="form-label">Número</label>
          <input type="text" name="D_numero" class="form-control" id="validationCustom07" value="{{$key->D_numero}}" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom08" class="form-label">Colonia</label>
          <input type="text" name="D_colonia" class="form-control" id="validationCustom08" value="{{$key->D_colonia}}" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom09" class="form-label">C.P.</label>
          <input type="text" name="D_cp" class="form-control" id="validationCustom09" value="{{$key->D_cp}}" required>
        </div>
        <div class="col-md-4">
          <label for="validationCustom10" class="form-label">Ciudad</label>
          <select class="form-select" name="IdCiudad" id="validationCustom10" required>
            <option value="{{$key->IdCiudad}}">{{$key->N_Ciudad}}</option>
            @foreach ($Cciudad as $item2)
              <option value="{{$item2->IdCiudad}}">{{$item2->N_Ciudad}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom11" class="form-label">Estado</label>
          <select class="form-select" name="IdEstado" id="validationCustom11" required>
            <option value="{{$key->IdEstado}}">{{$key->N_Estado}}</option>
            @foreach ($Cestado as $item3)
              <option value="{{$item3->IdEstado}}">{{$item3->N_Estado}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom12" class="form-label">Pais</label>
          <select class="form-select" name="IdPais" id="validationCustom12" required>
            <option value="{{$key->IdPais}}">{{$key->N_Pais}}</option>
            @foreach ($Cpais as $item4)
              <option value="{{$item4->IdPais}}">{{$item4->N_Pais}}</option>
            @endforeach
          </select>
        </div>
      @endforeach

      <div class="col-9">
        <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
        <button class="btn btn-outline-secondary" type="reset">Cancelar</button>
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
