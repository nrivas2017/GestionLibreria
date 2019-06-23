<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
   <!-- DataTales Example -->
   	<div class="card shadow mb-4">
        <div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">PRODUCTOS</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Id_producto</th>
							<th>Nombre</th>
							<th>Precio Unitario</th>
							<th>Stock</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Id_producto</th>
							<th>Nombre</th>
							<th>Precio Unitario</th>
							<th>Stock</th>
						</tr>
					</tfoot>
					<tbody>
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
	</div>
</div>