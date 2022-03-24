@extends('plantilla')

@section('seccion')
  <div id="S3">
    <h3>Consulta de sucursales.</h3><br>
    <form class="row g-3 needs-validation" novalidate>
      <br>
      @foreach ($csucursal as $key)
        <div class="col-9 d-inline">
          <a href="sucursales" class="btn btn-outline-secondary" type="button">Nuevo registro</a>
          <a href="{{Route('sucursal.actualizar', $key->IdSucursal)}}" class="btn btn-outline-secondary" type="button">Actualizar registro</a>
          <a href="{{Route('sucursal.eliminar',$key->IdSucursal)}}" class="btn btn-outline-secondary" type="button">Eliminar registro</a>
          <a href="menu" class="btn btn-outline-secondary" type="button">Salir</a>
        </div>
      <h3>Datos generales.</h3>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Identificador</label>
        <input type="text" name="Identificador" class="form-control" id="validationCustom01" value="{{$key->IdSucursal}}" disabled>
      </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Nombre</label>
          <input type="text" name="NombreTienda" class="form-control" id="validationCustom01" value="{{$key->NombreTienda}}" disabled>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Tipo</label>
          <select class="form-select"  name="IdTipoTienda" id="validationCustom02">
              <option value="{{$key->IdTipoTienda}}">{{$key->Tipo}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom03" class="form-label">Teléfono</label>
          <input type="text" name="TelefonoTienda" class="form-control" id="validationCustom03" value="{{$key->TelefonoTienda}}" disabled>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Correo electrónico</label>
          <input type="text" name="EmailTienda" class="form-control" id="validationCustom04" value="{{$key->EmailTienda}}" disabled>
        </div>
        <div class="col-md-4">
          <label class="form-label">Encargado</label>
          <select name="IdEmpleado" class="form-select">
            <option selected disabled value="">Seleccionar...</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">Status</label>
          <select class="form-select" name="IdStatus" id="validationCustom05">
            <option value="{{$key->IdStatus}}">{{$key->N_Status}}</option>
          </select>
        </div>
        <h3>Domicilio.</h3>
        <div class="col-md-4">
          <label for="validationCustom06" class="form-label">Calle</label>
          <input type="text" name="D_calle" class="form-control" id="validationCustom06" value="{{$key->D_calle}}" disabled>
        </div>
        <div class="col-md-4">
          <label for="validationCustom07" class="form-label">Número</label>
          <input type="text" name="D_numero" class="form-control" id="validationCustom07" value="{{$key->D_numero}}" disabled>
        </div>
        <div class="col-md-4">
          <label for="validationCustom08" class="form-label">Colonia</label>
          <input type="text" name="D_colonia" class="form-control" id="validationCustom08" value="{{$key->D_colonia}}" disabled>
        </div>
        <div class="col-md-4">
          <label for="validationCustom09" class="form-label">C.P.</label>
          <input type="text" name="D_cp" class="form-control" id="validationCustom09" value="{{$key->D_cp}}" disabled>
        </div>
        <div class="col-md-4">
          <label for="validationCustom10" class="form-label">Ciudad</label>
          <select class="form-select" name="IdCiudad" id="validationCustom10">
            <option value="{{$key->IdCiudad}}">{{$key->N_Ciudad}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom11" class="form-label">Estado</label>
          <select class="form-select" name="IdEstado" id="validationCustom11">
            <option value="{{$key->IdEstado}}">{{$key->N_Estado}}</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom12" class="form-label">Pais</label>
          <select class="form-select" name="IdPais" id="validationCustom12">
            <option value="{{$key->IdPais}}">{{$key->N_Pais}}</option>
          </select>
        </div>
      @endforeach
      <br><br>
      {{ $csucursal->links() }}
    </form>
  </div>
@endsection
