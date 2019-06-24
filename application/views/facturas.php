<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
   <!-- DataTales Example -->
   	<div class="card shadow mb-4">
        <div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Facturas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>id_factura</th>
							<th>id_cliente</th>
                            <th>nombre</th>
                            <th>rut</th>
                            <th>id_producto</th>
                            <th>producto</th>
                            <th>cantidad</th>
                            <th>precio</th>
							<th>fecha</th>
                            <th>hora</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
                            <th>id_factura</th>
							<th>id_cliente</th>
                            <th>nombre</th>
                            <th>rut</th>
                            <th>id_producto</th>
                            <th>producto</th>
                            <th>cantidad</th>
                            <th>precio</th>
							<th>fecha</th>
                            <th>hora</th>
						</tr>
					</tfoot>
					<tbody>
						<!-- Llenar tabla-->
						<?php
							foreach ($consulta->result() as $fila) {
						 		$html = '<tr>';
								$html=$html.'<td>'.$fila->id_factura.'</td>';
                                $html=$html.'<td>'.$fila->id_cliente.'</td>';
                                $html=$html.'<td>'.$fila->nombre.'</td>';
                                $html=$html.'<td>'.$fila->rut.'</td>';
                                $html=$html.'<td>'.$fila->id_producto.'</td>';
                                $html=$html.'<td>'.$fila->n_producto.'</td>';
                                $html=$html.'<td>'.$fila->cantidad.'</td>';
						 		$html=$html.'<td>'.$fila->precio.'</td>';
                                $html=$html.'<td>'.$fila->fecha.'</td>';
                                $html=$html.'<td>'.$fila->hora.'</td>'; 
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