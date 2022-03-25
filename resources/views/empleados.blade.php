@extends('plantilla')

@section('seccion')
  <div>
    <h2>Registrar nuevo empleado.</h2><br>
    <form method="post" action="{{Route('empleado.crear')}}" class="row g-3 needs-validation" novalidate>
      <br>
      @csrf
      <h3>Datos generales.</h3>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Apellido paterno</label>
        <input type="text" class="form-control" id="validationCustom02" name="apaterno" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Apellido materno</label>
        <input type="text" class="form-control" id="validationCustom03" name="amaterno" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="validationCustom04" name="telefono" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom05" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" id="validationCustom05" name="correoe" value="" required>
      </div>
      <h3>Domicilio.</h3>
      <div class="col-md-4">
        <label for="validationCustom06" class="form-label">Calle</label>
        <input type="text" class="form-control" id="validationCustom06" name="calle" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom07" class="form-label">Número</label>
        <input type="text" class="form-control" id="validationCustom07" name="numero" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom08" class="form-label">Colonia</label>
        <input type="text" class="form-control" id="validationCustom08" name="colonia" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom09" class="form-label">C.P.</label>
        <input type="text" class="form-control" id="validationCustom09" name="cp" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom10" class="form-label">Ciudad</label>
        <select class="form-select" id="validationCustom10" name="ciudad" required>
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Cciudad as $item)
            <option value="{{$item->IdCiudad}}">{{$item->N_Ciudad}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom11" class="form-label">Estado</label>
        <select class="form-select" id="validationCustom11" name="estado" required>
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Cestado as $item1)
            <option value="{{$item1->IdEstado}}">{{$item1->N_Estado}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom12" class="form-label">Pais</label>
        <select class="form-select" id="validationCustom12" name="pais" required>
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Cpais as $item2)
            <option value="{{$item2->IdPais}}">{{$item2->N_Pais}}</option>
          @endforeach
        </select>
      </div>
      <h3>Encargo.</h3>
      <div class="col-md-4">
        <label for="validationCustom13" class="form-label">Departamento</label>
        <select class="form-select" id="validationCustom13" name="departamento" required>
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Cdepartamento as $item3)
            <option value="{{$item3->IdDepartamento}}">{{$item3->N_Departamento}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom14" class="form-label">Puesto</label>
        <select class="form-select" id="validationCustom14" name="puesto" required>
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Cpuesto as $item4)
            <option value="{{$item4->IdPuesto}}">{{$item4->N_Puesto}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">Sucursal</label>
        <select class="form-select" name="sucursal">
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Csucursal as $item5)
            <option value="{{$item5->IdSucursal}}">{{$item5->NombreTienda}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationCustom15" class="form-label" >Fecha ingreso</label>
        <input type="text" class="form-control" id="validationCustom15" name="fingreso" placeholder="YYYY-MM-DD" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom16" class="form-label">Status</label>
        <select class="form-select" id="validationCustom16" name="estatus" required>
          <option selected disabled value="">Seleccionar...</option>
          @foreach ($Cstatus as $item6)
            <option value="{{$item6->IdStatus}}">{{$item6->N_Status}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-9">
        <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
        <button class="btn btn-outline-secondary" type="reset">Cancelar</button>
        <a href="empleadosc" class="btn btn-outline-secondary" type="button">Salir</a>
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
