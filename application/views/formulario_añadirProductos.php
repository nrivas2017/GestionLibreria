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
				<form role="form" >
				  <div class="form-group col-12">
				  	<div class="row col-5" s>
				  		<div class="mt-4 md-4 ml-5 mr-5 col-12">
				  			<h3>Añadir Productos </h3>
				  			<br>
				  		</div>
				  		
				  		<div class="col-3" >
				  			Seleccionar Proveedor:

				  		</div>

				  		<div class="col-5">
					  		<select class='form-control' name='proveedores'>
					  		<?php
					  			$html = '';
					  			foreach ($proveedor->result() as $f) {
					  				$html=$html.'<option value='.$f->id_proveedor.'>'.$f->nombre.'</option>';
					  			}
					  			echo $html;
					  		?>
					  		</select>
				  		</div>
				  		<hr width="100%">
				  	</div>
				  	<div class="row col-5">
				  		<div class="col-3">
				  			Seleccionar Producto:
				  			
				  		</div>
				  		<div class="col-5">
					  		<select class='form-control' name='proveedores'>
					  		<?php
					  			$html = '';
					  			foreach ($productos->result() as $f) {
					  				$html=$html.'<option value='.$f->id_producto.'>'.$f->nombre.'</option>';
					  			}
					  			echo $html;
					  		?>
					  		</select>				  			
				  		</div>
						<hr width="100%">
				  	</div>
				  	<div class="row col-5">
				  		<div class="col-3">
				  			Cantidad:
				  		</div>
				  		<div class="col-5">
				  			<input type="text" name="cantidad" placeholder="Cantidad">
				  		</div>
				  		
				  	</div>
				  	<div class="col-1 mt-4">
				  		<input class='btn btn-primary'type="submit" name="enviar">
				  	</div>
				  	
				  </div>
				  
				</form>
		</div>
	</div>
</div>


</body>
</html>
