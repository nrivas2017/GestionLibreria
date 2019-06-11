const productos =[];
var i=0; 
$(document).ready(function(){
	var presionado=false;
	var anterior ;
	$("#boleta").hide();
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
			console.log(productos);
			$("#boleta").show();
		}else{
				alert("Debes llenar Carrito!!");
		}

	})
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
});
function agregar_html(cadena){
	stock = cadena.split("<td>")[4].split("</td>")[0];
	if(parseInt(cantidad) <= parseInt(stock)){
		id_producto = cadena.split("<td>")[1].split("</td>")[0];
		nombre = cadena.split("<td>")[2].split("</td>")[0];
		Precio_unitario =cadena.split("<td>")[3].split("</td>")[0];
		var htmlTags = '<tr>'+
					 '<td>' + id_producto + '</td>'+
					  '<td>' + nombre + '</td>'+
					  '<td>' + Precio_unitario + '</td>'+
					  '<td>' + cantidad + '</td>'+
				'</tr>';
		//agrega a la primera tabla 
		$("#tabla tbody").append(htmlTags);

		//agrega a la tabla de boletas
		precio = Precio_unitario.split("$")[1];
		total = parseInt(cantidad)*parseInt(precio);
		var htmlTags2 = '<tr>'+
					  '<td>' + nombre + '</td>'+
					  '<td>' + cantidad + '</td>'+
					  '<td>' + total+ '</td>'+
					  
				'</tr>';
		$("#tabla2 tbody").append(htmlTags2);

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
	function load_data(query){
		$.ajax({
			url:"http://localhost/CodeIgniter-3.1.10/index.php/welcome/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#nombres').html(data);
			}

		});
	}
	function load_data2(query){
		$.ajax({
			url:"http://localhost/CodeIgniter-3.1.10/index.php/welcome/fetch2",
			method:"POST",
			data:{query2:query},
			success:function(data){
				$('#rut').html(data);
			}
		});
	}

