<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<body>
	<!--- Barra de Navegacion -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Gestion Libreria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=<?= base_url()?>>Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'proveedores'?>>Detalle<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 	<!--- Fin Barra de navegacion -->
<section>
  <div class="container">
    <div class="row">
        <div class="md-4 col-12" style="border: 1px solid black">
            <h5> Ingresar productos </h5>
            <a href=<?= base_url().'proveedores/addProveedor' ?> class="btn btn-primary"> Añadir Proveedor</a>
            <a href=<?= base_url().'proveedores/addProducto'?> class="btn btn-primary"> Añadir Productos </a>
        </div>
    </div>

  </div>

</section>

</body>