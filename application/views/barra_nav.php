<body>
<script type="text/javascript" src="<?= base_url().'js/help.js' ?>" ></script>
<link rel="stylesheet" type="text/css" href="<?= base_url().'css/style.css' ?>" media="screen" />
<link href="<?= base_url().'css/sbadmin2-sidebar-toggle.css' ?>" rel="stylesheet" type="text/css">


 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url().'index.php'?>>
    <div class="sidebar-brand-text mx-3">Gestion Libreria<sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href=<?= base_url().'index.php/Welcome/ventaProductos'?>>
      <span>Venta</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Manejo datos Productos
  </div>

  <!-- Nav Item - Producto Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProd" aria-expanded="true" aria-controls="collapseTwo">
      <span>Pruductos</span>
    </a>
    <div id="collapseProd" class="collapse" aria-labelledby="headingProd" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Configuracion Productos:</h6>
        <a class="collapse-item" href=<?= base_url().'index.php/Welcome/productos'?> >Productos</a>
        <a class="collapse-item" href=<?= base_url().'index.php/proveedores/addProducto'?> >Nuevo Producto</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Manejo datos Proveedores
  </div>

  <!-- Nav Item - Proveedor Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProv" aria-expanded="true" aria-controls="collapseUtilities">
      <span>Proveedores</span>
    </a>
    <div id="collapseProv" class="collapse" aria-labelledby="headingProv" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Configuracion Proveedor:</h6>
        <a class="collapse-item" href=<?= base_url().'index.php/Welcome/proveedores'?> >Proveedores</a>
        <a class="collapse-item" href=<?= base_url().'index.php/proveedores/addProveedor'?> >Nuevo Proveedor</a>
      </div>
    </div>
  </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Manejo datos Factura
</div>

<!-- Nav Item - Factura Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFactura" aria-expanded="true" aria-controls="collapseUtilities">
    <span>Factura</span>
  </a>
  <div id="collapseFactura" class="collapse" aria-labelledby="headingFactura" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Configuracion Factura:</h6>
      <a class="collapse-item" href="#" >Factura</a>
    </div>
  </div>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
</ul>
<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <?= form_open(base_url().'index.php/proveedores/searchProducto',array('class' => 'form-inline my-2 my-lg-0')) ?>
      <?php 
        $prod = array(
          'name' => 'nombre',
          'placeholder'=>'Busqueda',
          'class'=>'form-control mr-sm-2'
        );
        $submit = array(
          'placeholder'=>'Busqueda',
          'value'=>'Buscar',
          'class'=>'btn btn-outline-success my-2 my-sm-0'
        );
      ?>
      <?= form_input($prod)?>
      <?= form_submit($submit) ?>
      <?= form_close() ?>

    </nav>
    <!-- .........Fin NAV-TOP......-->
<!-- ......Resto del body......-->