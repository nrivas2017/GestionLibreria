$(document).ready(function(){

	$("#enviar").click(function(){
		var id_proveedor=$('#id_proveedor').val();
		var id_producto =$('#id_producto').val();
		var cantidad =$('#cantidad').val();
		
		$.ajax({
			type:"POST",
			url:"http://localhost/GestionLibreria/index.php/proveedores/recibirProducto",
			dataType:'json',
			data:{
				"id_producto":id_producto,
				"id_proveedor":id_proveedor,
				"cantidad":cantidad
			},
			success:function(data){
				alert("Datos Enviados Correctamente");
			}
		});	
	});
});