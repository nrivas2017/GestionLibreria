<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
    	<div class="col-xl-10 col-lg-12 col-md-9">
    		<div class="card o-hidden border-0 shadow-lg my-5">
          		<div class="card-body p-0">
            		<!-- Nested Row within Card Body -->
            		<div class="row">
            			<div class="col-lg-12">
                			<div class="p-5">
                 				<div class="text-center">
                    				<h1 class="h4 text-gray-900 mb-4">Añadir Proveedor</h1>
								</div>
								
								
								<?= form_open(base_url().'index.php/proveedores/recibirdatos') ?>
								<?php 
									$nombre = array(
										'name' => 'nombre',
										'placeholder'=>'escribe tu nombre',
										'class' => 'form-control form-control-user'
									);
									$telefono = array(
										'name'=> 'telefono',
										'placeholder'=>'Ingresa Numero',
										'class' => 'form-control form-control-user'
									);
									$submit = array(
										'value'=> 'Guardar',
										'class' => 'btn btn-primary btn-user btn-block'
									);
								?>
								<?= form_label('Nombre: ','nombre') ?>		 
								<?= form_input($nombre)?>
								<?= form_label('Telefono: ','telefono') ?> 
								<?= form_input($telefono)?>
								<?= form_submit($submit) ?>
								<?= form_close() ?>						
                			</div>
              			</div>
            		</div>
        		</div>
			</div>
		</div>
	</div>
</div>