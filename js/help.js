const productos =[];
var i=0; 
$(document).ready(function(){
	//console.log(this);
	var presionado=false;
	var anterior ;
	$("#boleta").hide();
	$("#id_cliente").hide();
	$(".columna").click(function(){
		if(!presionado){
			$(this).css("background-color","#baf7f7");
			presionado=true; 
			anterior =$(this);	
		}else{
			anterior.css("background-color","");
			presionado=false;
		}		
	});		
	$("#boton").click(function(){
		cantidad = $("#cantidad").val();
		if ( cantidad.length == 0 ){
			alert("Campo Vacio,Ingresar cantidad");
		}else{			
			
			cadena = anterior.html();
			//$("#tabla tbody")
			agregar_html(cadena);
		}
	});
	$("#enviar").click(function(){
		if(productos.length > 0 ){
			$("#boleta").show();
			for (var x = 0 ;x < productos.length ; x++){
				var htmlTags2 = '<tr>'+
					  '<td>' + productos[x].nombre + '</td>'+
					  '<td>' + productos[x].cantidad + '</td>'+
					  '<td>' + productos[x].total+ '</td>'+
					  '</tr>';
			$("#tabla2 tbody").append(htmlTags2);
			}
		}else{
				alert("Debes llenar Carrito!!");
		}
	});
	// Boton de cancelar en menu de boletas 
	$("#cancelar").click(function(){
		$("#boleta tbody").remove();
		$("#tabla2").append("<tbody></tbody>");
		$("#boleta").hide();
	});
	//Boton de guardar boleta en db 
	$("#guardar").click(function(){
		rut = $("#rut").html().split("<p>")[1].split("</p>")[0].split("Rut:")[1];
		guardarData(rut);
	});
	$("#nombre").keypress(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
			load_data2(search);
		}else{
			load_data();
			load_data();
		}
	});
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
		$('#wrapper.toggled').find("#sidebar-wrapper").find(".collapse").collapse('hide');
		
	});
});


function agregar_html(cadena){
	stock = cadena.split("<td>")[4].split("</td>")[0];
	if(parseInt(cantidad) <= parseInt(stock)){
		id_producto = cadena.split("<td>")[1].split("</td>")[0];
		nombre = cadena.split("<td>")[2].split("</td>")[0];
		Precio_unitario =cadena.split("<td>")[3].split("</td>")[0];
		var htmlTags = '<tr class="pr_carrito">'+
					 '<td>' + id_producto + '</td>'+
					  '<td>' + nombre + '</td>'+
					  '<td>' + Precio_unitario + '</td>'+
					  '<td>' + cantidad + '</td>'+
				'</tr>';
		//agrega a la primera tabla (Carrito) 
		$("#tabla tbody").append(htmlTags);
		
		//Guarda los datos en el arreglo
		precio = Precio_unitario.split("$")[1];
		total = parseInt(cantidad)*parseInt(precio);

		productos[i]={
			id_producto : id_producto,
			nombre      : nombre,
			Precio_unitario: Precio_unitario,
			cantidad       : cantidad ,
			total          : precio
		}
		i+=1;

	}else{
		alert("Cantidad supera al stock en tienda,Vuelva a intentar");
	}
}
	$('.pr_carrito').on("change",function(){
			$(".pr_carrito").click(function(){
			var respuesta = confirm("Desea borrar item : ");
			if(respuesta){
				string = $(this).html();
				id=string.split("<td>")[1].split("</td>")[0];
				nom = string.split("<td>")[2].split("</td>")[0];
				console.log(nom);
				console.log(productos);
				for (var x = 0 ;x < productos.length ; x++){
					if( id == productos[x].id_producto  ){
							productos.splice(x, 1);
					}
				}
				console.log(productos);
			}
			});
	});

	function load_data(query){
		$.ajax({
			url:"http://localhost/GestionLibreria/index.php/welcome/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#nombres').html(data);
			}

		});
	}
	function load_data2(query){
		$.ajax({
			url:"http://localhost/GestionLibreria/index.php/welcome/fetch2",
			method:"POST",
			data:{query2:query},
			success:function(data){
				$('#rut').html(data);
			}
		});
	}
	function guardarData(rut){
		var f=new Date();
		cad=f.getHours()+":"+f.getMinutes()+":"+f.getSeconds(); 
		for (var x = 0 ;x < productos.length ; x++) {
	 	 	$.ajax({
			 	url:"http://localhost/GestionLibreria/index.php/welcome/guardarBoleta",
			 	method:"POST",
			 	data:{
			 		rut_cliente:rut,
			 		id_producto:productos[x].id_producto,
			 		cantidad : productos[x].cantidad,
			 		precio   : productos[x].total,
			 		hora     : cad

			 	},
			 	success:function(data){
			 		alert("Datos Guardados Correctamente")
			 		console.log(data);
			 	},
			 	error:function(data){
			 		alert("Se ha producido un error")
			 	}
			 });
		}


	}
