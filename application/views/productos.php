<section>
	<div class="container"> 
		<div class="row">
			<div class="mt-4 md-4 col-12" >
				<h1 class="text-center"> Productos actuales </h1>
			</div>
			<!--- Tabla con productos actuales -->
			<div class="mt-4 md-4 col-12">
					<!-- Crea scroll -->
					<div style="overflow: scroll;height: 380px"> 
					<table class="table table-hover table-striped">
						<thead class="thead-dark">
							<tr>
								<td><b> ID </b></td>
								<td><b>NOMBRE</b></td>
								<td><b>PRECIO UNITARIO</b></td>
								<td><b>STOCK</b></td>
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
		</div>
	</div>

</section>