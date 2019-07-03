$(document).ready(function(){
	var presionado=false;

	var id_pro ="";
	var Nombre ="";
	var Precio_u="";
	var stock="";



	// Modifica html para generar inputs
	$(".columna").click(function(){
		if(!presionado){
			$(this).css("background-color","#baf7f7");
			html = $(this).html();

			presionado = true;
			anterior = $(this);

			id_pro = html.split("<td>")[1].split("</td>")[0];
			Nombre = html.split("<td>")[2].split("</td>")[0];
			Precio_u=html.split("<td>")[3].split("</td>")[0];
			stock = html.split("<td>")[4].split("</td>")[0];
			
			id_pro = separarCadena(id_pro);
			Nombre = separarCadena(Nombre);
			Precio_u=separarCadena(Precio_u);
			Precio_u = Precio_u.split("$")[1];
			stock = separarCadena(stock);

			html='';

			html+='<td><p>'+id_pro+'</p></td>';
	 		html+='<td><input id="nombre" type="text" value="'+Nombre+'" /></td>';
	 		html+='<td><input id="precio" type="text" value="'+Precio_u+'" /></td>';
	 		html+='<td><input id="stock" type="text" value="'+stock+'"/></td>';

	
	 		$(anterior).html(html);

		}else{
			anterior.css("background-color","");

			Nombre = $("#nombre").val();
			Precio_u = $("#precio").val();
			stock = $("#stock").val();

			html='';

			html+='<td><p>'+id_pro+'</p></td>';
	 		html+='<td><p>'+Nombre+'<p/></td>';
	 		html+='<td><p>$'+Precio_u+' <p/></td>';
	 		html+='<td><p>'+stock+'<p/></td>';

	 		$(anterior).html(html);
			
			presionado=false;

			$.ajax({
			 	url:"http://localhost/GestionLibreria/index.php/welcome/editarProducto",
			 	method:"POST",
			 	data:{
			 		id_producto:id_pro,
			 		stock: stock,
			 		precio_unitario: Precio_u,
			 		nombre : Nombre

			 	},
			 	success:function(data){
			 		console.log(data);
			 	},
			 	error:function(data){
			 		alert("Se ha producido un error")
			 	}
			 });

		}		
	});	
});

function separarCadena(cad){
	return cad.split("<p>")[1].split("</p>")[0];
}
