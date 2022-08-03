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
				//alertify.success(" Exito ! :)");
			}else{
				
				//alertify.error(" Fallo  :(");
			}
		}
		
});

}
