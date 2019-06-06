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
				<form role="form">
				  <div class="form-group col-10" style="border: 1px solid black">
				  	<div class="row">
				  		<p>Seleccionar Proveedor : </p>
				  		<div class="col-2">
					  		<select class='form-control' name='proveedores'>
					  		<?php
					  			$html = '';
					  			foreach ($consulta->result() as $f) {
					  				$html=$html.'<option value='.$f->id_proveedor.'>'.$f->nombre.'</option>';
					  			}
					  			echo $html;
					  		?>
					  		</select>
				  		</div>
				  		<div class="col-10">
				  			<p> Seleccionar Producto: </p>

				  		</div>
				  	</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
		</div>
	</div>
</div>


</body>
</html>
