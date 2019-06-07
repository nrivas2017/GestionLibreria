$(document).ready(function(){
	var presionado=false;
	var anterior ;
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
});
function agregar_html(cadena){
	id_producto = cadena.split("<td>")[1].split("</td>")[0];
	nombre = cadena.split("<td>")[2].split("</td>")[0];
	Precio_unitario =cadena.split("<td>")[3].split("</td>")[0];
	var htmlTags = '<tr>'+
				 '<td>' + id_producto + '</td>'+
				  '<td>' + nombre + '</td>'+
				  '<td>' + Precio_unitario + '</td>'+
				  '<td>' + cantidad + '</td>'+
			'</tr>';
	$("#tabla tbody").append(htmlTags);
}