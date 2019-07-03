<!-- Begin Page Content -->
<script type="text/javascript" src="<?= base_url().'js/helpProductos.js' ?>" ></script>
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
						 		$html = '<tr class="columna">';
								$html=$html.'<td><p>'.$fila->id_producto.'</p></td>';
						 		$html=$html.'<td><p>'.$fila->n_producto.'</p></td>';
						 		$html=$html.'<td><p>$'.$fila->precio_unitario.'</p></td>';
						 		$html=$html.'<td><p>'.$fila->stock.'</p></td>';
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