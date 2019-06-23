<section>
	<div class="container"> 
		<div class="row">
			<div class="mt-4 md-4 col-12" >
				<h1 class="text-center"> Productos actuales </h1>
			</div>
			<!--- Tabla con productos actuales -->
			<div class="mt-4 md-4 col-12">
					<!-- Crea scroll -->
					<div style="overflow: scroll;height: 400px"> 
					<table class="table table-bordered table-striped mb-0">
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
						 $html = '<tr>';
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
			<!--- Fin tabla -->
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
	</div>

</section>