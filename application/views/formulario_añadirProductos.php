<script type="text/javascript" src="<?= base_url().'js/añadirProductos.js' ?>"></script>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
    	<div class="col-xl-10 col-lg-12 col-md-9">
    		<div class="card o-hidden border-0 shadow-lg my-5">
          		<div class="card-body p-0">
            		<!-- Nested Row within Card Body -->
            		<div class="row">
            			<div class="col-lg-12">
                			<div class="p-5">
                 				<div class="text-center">
                    				<h1 class="h4 text-gray-900 mb-4">Añadir Productos</h1>
                  				</div>
								<form class="user">
									<div class="form-group">
										<label>Seleccionar Proveedor:</label>
										<select class='form-control' id='id_proveedor'>
											<?php
												$html = '';
												foreach ($proveedor->result() as $f) {
													$html=$html.'<option value='.$f->id_proveedor.'>'.$f->nombre.'</option>';
												}
												echo $html;
											?>
										</select>
									</div>

									<div class="form-group">
									<label>Seleccionar Producto:</label>
										<select class='form-control' id='id_producto'>
											<?php
												$html = '';
												foreach ($productos->result() as $f) {
													$html=$html.'<option value='.$f->id_producto.'>'.$f->nombre.'</option>';
												}
												echo $html;
											?>
										</select>
									</div>

									<label>Cantidad:</label>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="cantidad" placeholder="Cantidad">
									</div>


									<a id='enviar' href="index.html" class="btn btn-primary btn-user btn-block">
									Enviar
									</a>
								</form>
                			</div>
              			</div>
            		</div>
        		</div>
			</div>
		</div>
	</div>
</div>