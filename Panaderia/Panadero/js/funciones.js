function sacarid(datos){
    
    iden = datos
    cadena= "id=" + iden ;
	
	$.ajax({
			type:"POST",
			url:"php/traerid.php",
			data:cadena,
            success:function(r){
				if(r==1){
					//alertify.success(" Exito ! :)");
				}else{
					
					//alertify.error(" Fallo  :(");
				}
			}
			
	});
}

function guardarproduccion(bandejas, panes, usuario){
	total = bandejas * panes 
	cadena="nombre=" + usuario +
            "&total=" + total;
     
    $.ajax({
		type:"POST",
		url:"php/guardarproduccion.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla_producion').load('componentes/tabla_producion.php');
				alertify.success(" Produccion Registrada ! :)");
			}else{
				$('#tabla_producion').load('componentes/tabla_producion.php');
				alertify.error(" Fallo  :(");
			}
		}
		
});

}

function preguntarSiNo(iden){
    
	alertify.confirm('Eliminar Datos', '¿Esta seguro enviar esta solicitud?', 
					function(){ suspenderempleado(id) }
                , function(){ alertify.error('Se cancelo')});
}
function solicitudcancelar(iden){
	
    cadena= "id=" + iden;

	$.ajax({
		type:"POST",
		url:"php/solicitudcancelar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla_producion').load('componentes/tabla_producion.php');
			//	alertify.success(" Produccion Registrada ! :)");
			}else{
				$('#tabla_producion').load('componentes/tabla_producion.php');
			//	alertify.error(" Fallo  :(");
			}
		}
	});
}
function guardarsolicitud(observacion){
	cadena= "observacion=" + observacion ;
	alert(cadena);

	$.ajax({
		type:"POST",
		url:"php/guardarsolicitud.php",
		data:cadena,
		success:function(r){
			if(r==1){
			   	alertify.success(" Produccion Registrada ! :)");
			}else{
				alertify.error(" Fallo  :(");
			}
		}
	});
}
