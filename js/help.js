$(document).ready(function(){
	var presionado = 0;
	var anterior ;
	var contador=0;
	$(".columna").each(function(index){
		$(this).click(function(){
			if(presionado == 0){
				$(this).css("background-color","#baf7f7");
				presionado +=1; 
				anterior =$(this);
				$("#boton").click(function(){
					cantidad = $("#cantidad").val();
					if ( cantidad.length == 0 ){
						alert("Campo Vacio,Ingresar cantidad");
					}else{
						contador +=1; 
						alert(contador);
						cadena = anterior.html();
						//$("#tabla tbody")
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
					contador=0;
				})
			}else{
				anterior.css("background-color","");
				presionado = 0;
			}
		});		
	});
});