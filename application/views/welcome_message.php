
<h1>GESTION DE LIBRERIA</h1>



<!-- Section antigua 
		<section>

			<h3> Datos DB </h3>
			<br>
			<table style='margin-left: 2%'class="table table-dark  col-5">
				<tr>
					<td> ID </td>
					<td> NOMBRE</td>
					<td> CIUDAD </td>
					<td> EDAD </td>
				</tr>
				<?php 
					foreach ($consulta->result() as $fila) {
						 $html = '<tr>';
						 $html=$html.'<td>'.$fila->id.'</td>';
						 $html=$html.'<td>'.$fila->nombre.'</td>';
						 $html=$html.'<td>'.$fila->ciudad.'</td>';
						 $html=$html.'<td>'.$fila->edad.'</td>';
						 $html=$html.'<td><a href="'.base_url().'index.php/welcome/eliminar/'.$fila->id.'"><input type="button" value="eliminar"></a></td>';
						 $html=$html.'<td><a href="'.base_url().'index.php/welcome/editar/'.$fila->id.'"><input type="button" value="editar"></a></td>';
						 $html=$html.'</tr>';
						 echo $html;
					}
					
					
				?>	
			</table>
			<?php
			echo '<a href="'.base_url().'index.php/welcome/nuevo"><input type="button" value="Nuevo"></a>';
			?>
		</section>
-->