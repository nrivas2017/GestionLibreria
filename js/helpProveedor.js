$(document).ready(function(){
	var presionado=false;

	var id_pro ="";
	var nombre ="";
	var cel="";

	// Modifica html para generar inputs
	$(".columna").click(function(){
		if(!presionado){
			$(this).css("background-color","#baf7f7");
			html = $(this).html();

			presionado = true;
			anterior = $(this);

			id_pro = html.split("<td>")[1].split("</td>")[0];
			nombre = html.split("<td>")[2].split("</td>")[0];
			cel=html.split("<td>")[3].split("</td>")[0];

			
			id_pro = separarCadena(id_pro);
			nombre = separarCadena(nombre);
			cel=separarCadena(cel);

			html='';

			html+='<td><p>'+id_pro+'</p></td>';
	 		html+='<td><input id="nombre" type="text" value="'+nombre+'" /></td>';
	 		html+='<td><input id="cel" type="text" value="'+cel+'" /></td>';


	
	 		$(anterior).html(html);

		}else{
			anterior.css("background-color","");

			nombre = $("#nombre").val();
			cel = $("#cel").val();

			html='';

			html+='<td><p>'+id_pro+'</p></td>';
	 		html+='<td><p>'+nombre+'<p/></td>';
	 		html+='<td><p>'+cel+' <p/></td>';
	 
	 		$(anterior).html(html);
			
			presionado=false;

			$.ajax({
			 	url:"http://localhost/GestionLibreria/index.php/welcome/editarProveedor",
			 	method:"POST",
			 	data:{
			 		id_proveedor:id_pro,
			 		telefono: cel,
			 		nombre : nombre

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
