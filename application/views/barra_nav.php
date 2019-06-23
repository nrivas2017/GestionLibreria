<body>
<script type="text/javascript" src="<?= base_url().'js/help.js' ?>" ></script>
<link rel="stylesheet" type="text/css" href="<?= base_url().'css/style.css' ?>" media="screen" />
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=<?= base_url().'index.php'?>>Gestion Libreria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'index.php'?>>Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'index.php/Welcome/productos'?> >Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?= base_url().'index.php/proveedores'?> >Detalle</a>
      </li>
    </ul>
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
  </div>
</nav>