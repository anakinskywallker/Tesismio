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
    
	alertify.confirm('Producto Frabicado', '¿Esta seguro enviar esta solicitud?', 
					function(){ fabricarTorta(iden) }
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
function fabricarTorta(id){

	cadena="id=" + id;

$.ajax({
	type:"POST",
	url:"php/producirTortas.php",
	data:cadena,
	success:function(r){
	   if(r==1){
		      alertify.success("Producto listo para entregar!");
			  $('#tabla_encargos').load('componentes/tabla_encargos.php'); 
			 
	   }else{
		      alertify.error("Fallo el servidor :(");
		
	   }
	}
	});

	
}
