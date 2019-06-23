<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section>
  <div class="container">
    <div class="row">
        <div class="md-4 col-12" style="border: 1px solid black">
            <div class="mt-4 col-12">
               <h5> Ingresar productos </h5>
            </div>
           
            <div class="mt-4 col-5">
                <a href=<?= base_url().'index.php/proveedores/addProveedor' ?> class="mr-2 btn btn-primary"> Añadir Proveedor</a>
                <a href=<?= base_url().'index.php/proveedores/addProducto'?> class="btn btn-primary"> Añadir Productos </a>           
            </div>

        </div>
    </div>

  </div>

</section>