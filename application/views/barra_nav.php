<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=<?= base_url()?>>Gestion Libreria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'proveedores/showProductos'?>>Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'proveedores/showDetalle'?> >Detalle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'proveedores/showVenta'?> >Venta</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>