<div class="container">
	<div class="row">
		<div class="col-12">
			<h3>Ingresar Datos </h3><br>

			<?= form_open(base_url().'proveedores/recibirdatos') ?>
			<?php 
				$nombre = array(
					'name' => 'nombre',
					'placeholder'=>'escribe tu nombre'
				);
				$telefono = array(
					'name'=> 'telefono',
					'placeholder'=>'Ingresa Numero'
				);
			?>
				<?= form_label('Nombre: ','nombre') ?>		 
				<?= form_input($nombre)?>
				<?= form_label('Telefono: ','telefono') ?> 
				<?= form_input($telefono)?>
			<?= form_submit('','Guardar') ?>
			<?= form_close() ?>
		</div>
	</div>
</div>


