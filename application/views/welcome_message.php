<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Venta</h1>
	<div class="row">

		<script type="text/javascript" src="<?= base_url().'js/help.js' ?>" ></script>

		<!-- Productos -->
		<div class="col-lg-5">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Productos</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<!-- Crea scroll -->
						<div style="overflow: scroll;height: 400px;width: 100%"> 
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id_producto</th>
										<th>Nombre</th>
										<th>Precio Unitario</th>
										<th>Stock</th>
									</tr>
								</thead>
								<tbody>
									<!-- Llenar tabla-->
									<?php
										foreach ($consulta->result() as $fila) {
											$html = '<tr class="columna">';
											$html=$html.'<td>'.$fila->id_producto.'</td>';
											$html=$html.'<td>'.$fila->n_producto.'</td>';
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
				</div>
			</div>
		</div>
		<!-- Fin Productos -->


		<!-- Operacion -->
		<div class="col-lg-2">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Operacion</h6>
				</div>
				<div class="card-body">
					<div class="mt-5 mb-5">
						<button  id="boton" class="mt-5"> Añadir a Carrito</button>
						<input id="cantidad" class="col-12 mt-1" type="text" name="Cantidad" placeholder="Cantidad">
						<button id='enviar'>Crear boleta</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin Operacion -->


		<!-- Carrito -->
		<div class="col-lg-5">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Carrito</h6>
				</div>
				<div class="card-body">
					<!-- Crea scroll -->
					<div style="overflow: scroll;height: 400px;width: 100%"> 
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
		</div>
		<!-- Fin Carrito -->


	</div>
</div>

<section>
	<div class="container"> 
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
