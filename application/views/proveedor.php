<!-- Begin Page Content -->
<div class="container-fluid">
	<script type="text/javascript" src="<?= base_url().'js/helpProveedor.js' ?>" ></script>
	<!-- Page Heading -->
   <!-- DataTales Example -->
   	<div class="card shadow mb-4">
        <div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">PROVEEDORES</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Id_proveedor</th>
							<th>Nombre</th>
							<th>Telefono</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
            <th>Id_proveedor</th>
							<th>Nombre</th>
							<th>Telefono</th>
						</tr>
					</tfoot>
					<tbody>
						<!-- Llenar tabla-->
						<?php
							foreach ($consulta->result() as $fila) {
						 		$html = '<tr class="columna" >';
								$html=$html.'<td><p>'.$fila->id_proveedor.'</p></td>';
						 		$html=$html.'<td><p>'.$fila->nombre.'</p></td>';
						 		$html=$html.'<td><p>'.$fila->telefono.'</p></td>';
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