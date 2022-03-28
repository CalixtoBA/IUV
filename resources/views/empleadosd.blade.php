@extends('plantilla')

@section('seccion')
  <div id="S3">
    <h3>Eliminar empleado.</h3><br>
        <form action="{{Route('empleado.eliminarr')}}" method="post" class="row g-3 needs-validation" novalidate>
          @method('PUT')
          @csrf
          <br>
          @foreach ($eempleado as $valor)
            <h3>Datos generales.</h3>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Identificador</label>
              <input type="text" name="Identificador" class="form-control" id="validationCustom01" value="{{$valor->IdEmpleado}}" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Nombre</label>
              <input type="text" name="Nombre" class="form-control" id="validationCustom01" value="{{$valor->NombreE}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Apellido paterno</label>
              <input type="text" name="Apaterno" class="form-control" id="validationCustom02" value="{{$valor->A_Paterno}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom03" class="form-label">Apellido materno</label>
              <input type="text" name="Amaterno" class="form-control" id="validationCustom03" value="{{$valor->A_Materno}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom04" class="form-label">Teléfono</label>
              <input type="text" name="Telefono" class="form-control" id="validationCustom04" value="{{$valor->TelefonoE}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom05" class="form-label">Correo electrónico</label>
              <input type="text" name="Correo" class="form-control" id="validationCustom05" value="{{$valor->EmailE}}" disabled>
            </div>
            <h3>Domicilio.</h3>
            <div class="col-md-4">
              <label for="validationCustom06" class="form-label">Calle</label>
              <input type="text" name="Calle" class="form-control" id="validationCustom06" value="{{$valor->D_calle}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom07" class="form-label">Número</label>
              <input type="text" name="Numero" class="form-control" id="validationCustom07" value="{{$valor->D_numero}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom08" class="form-label">Colonia</label>
              <input type="text" name="Colonia" class="form-control" id="validationCustom08" value="{{$valor->D_colonia}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom09" class="form-label">C.P.</label>
              <input type="text" name="cp" class="form-control" id="validationCustom09" value="{{$valor->D_cp}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom10" class="form-label">Ciudad</label>
              <select class="form-select" id="validationCustom10" name="ciudad" disabled>
                <option value="{{$valor->IdCiudad}}">{{$valor->N_Ciudad}}</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom11" class="form-label">Estado</label>
              <select class="form-select" id="validationCustom11" name="estado" disabled>
                <option value="{{$valor->IdEstado}}">{{$valor->N_Estado}}</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom12" class="form-label">Pais</label>
              <select class="form-select" id="validationCustom12" name="pais" disabled>
                <option value="{{$valor->IdPais}}">{{$valor->N_Pais}}</option>
              </select>
            </div>
            <h3>Encargo.</h3>
            <div class="col-md-4">
              <label for="validationCustom13" class="form-label">Departamento</label>
              <select class="form-select" id="validationCustom13" name="departamento" disabled>
                <option value="{{$valor->IdDepartamento}}">{{$valor->N_Departamento}}</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom14" class="form-label">Puesto</label>
              <select class="form-select" id="validationCustom14" name="puesto" disabled>
                <option value="{{$valor->IdPuesto}}">{{$valor->N_Puesto}}</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom18" class="form-label">Sucursal</label>
              <select class="form-select" id="validationCustom18" name="sucursal" disabled>
                <option value="{{$valor->IdSucursal}}">{{$valor->NombreTienda}}</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationCustom16" class="form-label">Fecha ingreso</label>
              <input type="text" class="form-control" id="validationCustom15" name="fingreso" value="{{$valor->FechaIngreso}}" disabled>
            </div>
            <div class="col-md-4">
              <label for="validationCustom17" class="form-label">Status</label>
              <select class="form-select" id="validationCustom16" name="estatus" disabled>
                <option value="{{$valor->IdStatus}}">{{$valor->N_Status}}</option>
              </select>
            </div>
          @endforeach
          <br><br>
          <div class="col-9">
            <button class="btn btn-outline-secondary" type="submit">Aceptar</button>
            <a href="/empleadosc" class="btn btn-outline-secondary" type="button">Salir</a>
          </div>
        </form>
  </div>
@endsection
