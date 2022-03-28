@extends('plantilla')

@section('seccion')
  <div>
    <h3>Editar registro de empleados.</h3><br>
      <form action="{{Route('empleado.actualizarr')}}" method="post" class="row g-3 needs-validation" novalidate>
          <br>
          @method('PUT')
          @csrf
          @foreach ($eempleados as $valor)
            <h3>Datos generales.</h3>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Identificador</label>
              <input type="text" name="Identificador" class="form-control" id="validationCustom01" value="{{$valor->IdEmpleado}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Nombre</label>
              <input type="text" name="Nombre" class="form-control" id="validationCustom01" value="{{$valor->NombreE}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Apellido paterno</label>
              <input type="text" name="Apaterno" class="form-control" id="validationCustom02" value="{{$valor->A_Paterno}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom03" class="form-label">Apellido materno</label>
              <input type="text" name="Amaterno" class="form-control" id="validationCustom03" value="{{$valor->A_Materno}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom04" class="form-label">Teléfono</label>
              <input type="text" name="Telefono" class="form-control" id="validationCustom04" value="{{$valor->TelefonoE}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom05" class="form-label">Correo electrónico</label>
              <input type="text" name="Correo" class="form-control" id="validationCustom05" value="{{$valor->EmailE}}" required>
            </div>
            <h3>Domicilio.</h3>
            <div class="col-md-4">
              <label for="validationCustom06" class="form-label">Calle</label>
              <input type="text" name="Calle" class="form-control" id="validationCustom06" value="{{$valor->D_calle}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom07" class="form-label">Número</label>
              <input type="text" name="Numero" class="form-control" id="validationCustom07" value="{{$valor->D_numero}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom08" class="form-label">Colonia</label>
              <input type="text" name="Colonia" class="form-control" id="validationCustom08" value="{{$valor->D_colonia}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom09" class="form-label">C.P.</label>
              <input type="text" name="cp" class="form-control" id="validationCustom09" value="{{$valor->D_cp}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom10" class="form-label">Ciudad</label>
              <select class="form-select" id="validationCustom10" name="ciudad" required="true">
                <option value="{{$valor->IdCiudad}}">{{$valor->N_Ciudad}}</option>
                @foreach ($Cciudad as $key)
                  <option value="{{$key->IdCiudad}}">{{$key->N_Ciudad}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom11" class="form-label">Estado</label>
              <select class="form-select" id="validationCustom11" name="estado" required="true">
                <option value="{{$valor->IdEstado}}">{{$valor->N_Estado}}</option>
                @foreach ($Cestado as $key1)
                  <option value="{{$key1->IdEstado}}">{{$key1->N_Estado}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom12" class="form-label">Pais</label>
              <select class="form-select" id="validationCustom12" name="pais" required="true">
                <option value="{{$valor->IdPais}}">{{$valor->N_Pais}}</option>
                @foreach ($Cpais as $key2)
                  <option value="{{$key2->IdPais}}">{{$key2->N_Pais}}</option>
                @endforeach
              </select>
            </div>
            <h3>Encargo.</h3>
            <div class="col-md-4">
              <label for="validationCustom13" class="form-label">Departamento</label>
              <select class="form-select" id="validationCustom13" name="departamento" required="true">
                <option value="{{$valor->IdDepartamento}}">{{$valor->N_Departamento}}</option>
                @foreach ($Cdepartamento as $key3)
                  <option value="{{$key3->IdDepartamento}}">{{$key3->N_Departamento}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom14" class="form-label">Puesto</label>
              <select class="form-select" id="validationCustom14" name="puesto" required="true">
                <option value="{{$valor->IdPuesto}}">{{$valor->N_Puesto}}</option>
                @foreach ($Cpuesto as $key4)
                  <option value="{{$key4->IdPuesto}}">{{$key4->N_Puesto}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom15" class="form-label">Sucursal</label>
              <select class="form-select" id="validationCustom15" name="sucursal" required="true">
                <option value="{{$valor->IdSucursal}}">{{$valor->NombreTienda}}</option>
                @foreach ($Csucursal as $key5)
                  <option value="{{$key5->IdSucursal}}">{{$key5->NombreTienda}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom16" class="form-label">Fecha ingreso</label>
              <input type="text" class="form-control" id="validationCustom15" name="fingreso" value="{{$valor->FechaIngreso}}" required>
            </div>
            <div class="col-md-4">
              <label for="validationCustom17" class="form-label">Status</label>
              <select class="form-select" id="validationCustom16" name="estatus" required="true">
                <option value="{{$valor->IdStatus}}">{{$valor->N_Status}}</option>
                @foreach ($Cstatus as $key6)
                  <option value="{{$key6->IdStatus}}">{{$key6->N_Status}}</option>
                @endforeach
              </select>
            </div>
          @endforeach
          <br><br>
          <div class="col-9">
            <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
            <button class="btn btn-outline-secondary" type="reset">Cancelar</button>
            <a href="/empleadosc" class="btn btn-outline-secondary" type="button">Salir</a>
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
