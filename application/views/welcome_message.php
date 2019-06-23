<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php 
	session_start();
?>
<section>
	<div class="container"> 
		<div class="row">
			<div class="mt-4 md-4 col-12" >
				<h1 class="text-center"> Productos actuales </h1>
			</div>
			<!--- Tabla con productos actuales -->
			<div class="mt-4 md-4 "style="border: 1px solid black">
					<!-- Crea scroll -->
					<div style="overflow: scroll;height: 400px;width: 100%"> 
					<table class="table table-sm table-bordered table-striped mb-0">
						<thead>
							<tr>
								<td> Id_producto </td>
								<td> Nombre </td>
								<td> Precio Unitario </td>
								<td> Stock  </td>
							</tr>
						</thead>
						<tbody >
					<!-- Llenar tabla-->
				<?php
					foreach ($consulta->result() as $fila) {
						 $html = '<tr class="columna">';
						 $html=$html.'<td>'.$fila->id_producto.'</td>';
						 $html=$html.'<td>'.$fila->nombre.'</td>';
						 $html=$html.'<td>$'.$fila->precio_unitario.'</td>';
						 $html=$html.'<td>'.$fila->stock.'</td>';
						 $html=$html.'</tr>';
						 echo $html;
					}
				?>
						</tbody>
					</table>
				  </div>
			</div>	
			<div class="row mt-4 ml-2 col-2" style="border:1px solid yellow">
					<div class="mt-5 mb-5">
						<button  id="boton" class="mt-5"> Añadir a Carrito</button>
						<input id="cantidad" class="col-12 mt-1" type="text" name="Cantidad" placeholder="Cantidad">
						<button id='enviar'>Crear boleta</button>
						

					</div>	
			</div>
			<div class="row mt-4 ml-4 col-4" style="border: 1px solid green">
				<div class="mt-1">
					<div style="overflow: scroll;height: 400px;"> 
						<table id="tabla" class="table table-sm table-bordered table-striped mb-0">
							<thead>
								<tr>
									<td> Id_producto </td>
									<td> Nombre </td>
									<td> Precio Unitario </td>
									<td> Cantidad  </td>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>

			</div>
			<!--- Fin tabla -->
		</div>
		<div id='boleta' class="card col-5" style="position: absolute !important; left:25% !important;bottom:20% !important;" >
			<div class="card-body ">
				<div class="row">
					<div class="col-3">
						<p> Cliente:</p>
						
					</div>
					<div class="col-1">
						<input list='nombres' type="text" name="" id="nombre">
						<datalist id="nombres"></datalist>
					</div>
				</div>
				<div class="row">
					<div  class="col-12">
						<p id="rut">Rut:</p> 
					</div>
				</div>
				<div class="row">
					<div class="col-12">			
						<p> Fecha : <?= date(' j-m-Y ');?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-12"> 
						<p> Productos </p>
						<hr>	
					</div>
					<div class="col-12">
						<table id="tabla2" class="table table-sm table-bordered table-striped mb-0">
							<thead>
								<tr>
									<th> Producto</th>
									<th> Cantidad</th>
									<th> Precio </th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="col-12">
						<hr>
						<button id='cancelar'> Cancelar boleta</button>
						<button id='guardar'> Guardar Boleta</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

</body>
