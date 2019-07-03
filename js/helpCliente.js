$(document).ready(function(){
	var presionado=false;

	var id_cli ="";
	var Nombre ="";
	var rut="";

	// Modifica html para generar inputs
	$(".columna").click(function(){
		if(!presionado){
			$(this).css("background-color","#baf7f7");
			html = $(this).html();

			presionado = true;
			anterior = $(this);

			id_cli = html.split("<td>")[1].split("</td>")[0];
			rut = html.split("<td>")[2].split("</td>")[0];
			Nombre=html.split("<td>")[3].split("</td>")[0];

			
			id_cli = separarCadena(id_cli);
			rut = separarCadena(rut);
			Nombre=separarCadena(Nombre);

			html='';

			html+='<td><p>'+id_cli+'</p></td>';
	 		html+='<td><input id="rut" type="text" value="'+rut+'" /></td>';
	 		html+='<td><input id="nombre" type="text" value="'+Nombre+'" /></td>';


	
	 		$(anterior).html(html);

		}else{
			anterior.css("background-color","");

			Nombre = $("#nombre").val();
			rut = $("#rut").val();

			html='';

			html+='<td><p>'+id_cli+'</p></td>';
	 		html+='<td><p>'+rut+'<p/></td>';
	 		html+='<td><p>'+Nombre+' <p/></td>';

	 
	 		$(anterior).html(html);
			
			presionado=false;

			$.ajax({
			 	url:"http://localhost/GestionLibreria/index.php/welcome/editarCliente",
			 	method:"POST",
			 	data:{
			 		id_cliente:id_cli,
			 		rut: rut,
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
