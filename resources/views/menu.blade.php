@extends('plantilla')

@section('seccion')
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">App IUV</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">App IUV</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="sucursalc">Sucursales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="empleados">Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="usuarios">Usuarios</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
@endsection
