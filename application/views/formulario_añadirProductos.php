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

<div class="container">
	<div class="row">
		<div class="col-12">
			<h3>Añadir Productos </h3><br>
			<?= form_open(base_url().'proveedores/recibirdatosProducto') ?>
				<?php 
				    $cantidad = array(
						'type' =>'number',
						'name'=> 'cantidad',
						'min'=>'1'
					);
					$prov = array(
						"id"=> array(),
						"nombre"=> array(),
						"telefono"=> array()
					);
					$prod = array(
						"id"=> array(),
						"nombre"=> array(),
						"precio"=> array(),
						"stock"=> array()
					);
					foreach ($consulta->result() as $fila) {
							 $prov["id"][]=$fila->id_proveedor;
							 //      <option value="id_proveedor">nombre</option>
							 $prov["nombre"][$fila->id_proveedor]=$fila->nombre;
							 $prov["telefono"][]=$fila->telefono;
					}

					//Falta llenado array $prod

					$optionsProv = $prov['nombre']; //Todos los nombres de Proveedores
					$optionsProd = $prod['nombre']; //Todos los nombres de Productos
				?>
				<?= form_label('Proveedor: ','proveedor') ?>
				<?=form_dropdown('proveedor',$optionsProv,set_value('proveedor')) ?>

				<?= form_label('Productos: ','productos') ?>
				<?=form_dropdown('productos',$optionsProd,set_value('productos')) ?>

				<?= form_label('Cantidad: ','cantidad') ?> 
				<?= form_input($cantidad)?>

				<?= form_submit('','Agregar') ?>
				<?= form_close() ?>
		</div>
	</div>
</div>
