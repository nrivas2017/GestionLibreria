<!-- Begin Page Content -->
<div class="container-fluid">
	<script type="text/javascript" src="<?= base_url().'js/helpCliente.js' ?>" ></script>
	<!-- Page Heading -->
   <!-- DataTales Example -->
   	<div class="card shadow mb-4">
        <div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">CLIENTES</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Id_Cliente</th>
							<th>Rut</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
            				<th>Id_Cliente</th>
							<th>Rut</th>
							<th>Nombre</th>
						</tr>
					</tfoot>
					<tbody>
						<!-- Llenar tabla-->
						<?php
							foreach ($consulta->result() as $fila) {
						 		$html = '<tr class="columna">';
								$html=$html.'<td><p>'.$fila->id_cliente.'</p></td>';
						 		$html=$html.'<td><p>'.$fila->rut.'</p></td>';
						 		$html=$html.'<td><p>'.$fila->nombre.'</p></td>';
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