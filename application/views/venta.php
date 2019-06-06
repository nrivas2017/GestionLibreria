<div class="container"> 
		<div class="row">
			<div class="mt-4 md-4 col-12" >
				<h1 class="text-center"> Carrito </h1>
			</div>
			
            <div class="mt-4 md-4 col-12">
				<?= form_open(base_url().'proveedores/recibirdatosventa') ?>
				<?php 
				   //Arreglo datos de productos
					$datos = array(
						"id"=> array(),
						"nombre"=> array(),
						"precio"=> array(),
						"stock"=> array(),
					);
					foreach ($consulta->result() as $fila) {
							 $datos["id"][]=$fila->id_producto;
							 $datos["nombre"][]=$fila->nombre;
							 $datos["precio"][]=$fila->precio_unitario;
							 $datos["stock"][]=$fila->stock;
					}

					$options = $datos['nombre']; //Todos los nombres de Productos
					$precio = array(
						'type' =>'number',
						'name'=> 'precio',
						'disabled'=>'disabled',
						'value'=>$datos['precio'][0]
					);
					$cantidad = array(
						'type' =>'number',
						'name'=> 'cantidad',
						'min'=>'1',
						'max'=>$datos['stock'][0]
					);
					$id = array(
						'type' =>'hidden',
						'name'=> 'id',
						'value'=>$datos['id'][0]
					);
				?>
				<?= form_label('Nombre: ','nombre') ?>
				<?=form_dropdown('nombre',$options,set_value('nombre')) ?>		 
				<!--<?= form_input($nombre)?>-->
				
				<?= form_label('','id') ?> 
				<?= form_input($id)?>

				<?= form_label('Precio: ','precio') ?> 
				<?= form_input($precio)?>

				<?= form_label('Cantidad: ','cantidad') ?> 
				<?= form_input($cantidad)?>

				<?= form_submit('','Guardar') ?>
				<?= form_close() ?>
			</div>
		</div>
	</div>