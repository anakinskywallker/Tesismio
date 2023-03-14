function sacarid(datos){
    
    d=datos.split('||');
    iden = d[0];  
    nombre = d[2];
    foto = d[1];
    valor = d[3];   
    $('#nombrepro').text(d[2]);
    cadena= "id=" + iden + 
			"&nombre=" + nombre +
			"&foto=" + foto +
			"&valor=" + valor;

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
function agregarafactura(cantidad){

	cadena="cantidad=" + cantidad;
  
	$.ajax({
		type:"POST",
		url:"php/agregaraFactura.php",
		data:cadena,
		success:function(r){
			if(r==1){
                alertify.success("Agregado con exito :)");
                $('#tabla').load('componentes/tabla1.php');
                $('#tablain').load('componentes/tabla_in.php');
                $('#tabla1').load('php/sumarainventario.php');
				$('#tabl').load('componentes/tabla2.php');
				
  
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
  
    
}
function agregarafactura2(cantidad,preciou){

	cadena="cantidad=" + cantidad +
           "&preciou=" + preciou;
  
	$.ajax({
		type:"POST",
		url:"php/agregaraFactura2.php",
		data:cadena,
		success:function(r){
			if(r==1){
                alertify.success("Agregado con exito :)");
               // $('#tabla').load('componentes/tabla1.php');
                $('#tablain').load('componentes/tabla_in.php');
                $('#tabla2').load('php/sumarainventario.php');
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
  
    
}
function eliminarPtabla(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarPtabla.php",
			data:cadena,
			success:function(r){
				if(r==1){
					alertify.success("Eliminado con exito!");
                    $('#tabla').load('componentes/tabla1.php');
					$('#tabl').load('componentes/tabla2.php');
                    $('#tablain').load('componentes/tabla_in.php');

				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
function limpiar(){
        cadena="id=" + 0;

		  $.ajax({
			 type:"POST",
			 url:"php/clear.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
					//alertify.success("Cleansed!");
                    $('#tabla').load('componentes/tabla1.php');
					$('#tabl').load('componentes/tabla2.php');
                    $('#tablain').load('componentes/tabla_in.php');
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
	
}
function generarFactura(pago,total,nombre){
    
    
    cadena="nombre=" + nombre +
            "&total=" + total  +
            "&pago=" + pago;
    var cambio = pago - total; 
    
    if ( cambio < 0){
        alertify.error("No puede cancelar con esa cantidad, digite un valor correcto :(");
    }else{
         var n = cambio.toString();
         aux = "$ " + n;
         alertify.alert(' ! Su cambio es ¡', aux, function(){ alertify.success('Ok'); });   
        
             $.ajax({
			 type:"POST",
			 url:"php/generarFactura.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
					   //alertify.success("Venta Registrada!");
                       limpiar(); 
                    
				}else{
					// alertify.error("Fallo el servidor :(");
                       limpiar(); 
				}
			 }
		     });
        }
}
function generarFactura2(pago,total,nombre){
    
    
    cadena="nombre=" + nombre +
            "&total=" + total  +
            "&pago=" + pago;
    var cambio = pago - total; 
    
    if ( cambio < 0){
        alertify.error("No puede cancelar con esa cantidad, digite un valor correcto :(");
    }else{
         var n = cambio.toString();
         aux = "$ " + n;
         alertify.alert(' ! Su cambio es ¡', aux, function(){ alertify.success('Ok'); });   
        
             $.ajax({
			 type:"POST",
			 url:"php/generarFactura2.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
					//alertify.success("Cleansed!");
                       limpiar(); 
                    
				}else{
					//alertify.error("Fallo el servidor :(");
                       limpiar(); 
				}
			 }
		     });
        }
}
function generarFactura3(pago,total,nombre, fecha, nombreU, informacion, telefono, descripcion){
    
    
    cadena="nombre=" + nombre +
            "&total=" + total  +
			"&fecha=" + fecha +
			"&nombreU=" + nombreU +
			"&informacion=" + informacion +
			"&telefono=" + telefono +
			"&descripcion=" + descripcion +
            "&pago=" + pago;
		
	var cambio = pago - total; 
	
    
    if ( cambio < 0){

		cambio = cambio * -1;
		var n = cambio.toString();
         aux = "$ " + n;
		alertify.alert("Saldo Pendiente ", aux, function(){ alertify.success('Ok'); }	);
    }else{
		
		var n = cambio.toString();
		aux = "$ " + n;
		alertify.alert(' ! Su cambio es ¡', aux, function(){ alertify.success('Ok'); });   
    }
	$.ajax({
		type:"POST",
		url:"php/generarFactura3.php",
		data:cadena,
		success:function(r){
		   if(r==1){
			     alertify.success("Listo!");
				  limpiar(); 
			   
		   }else{
			      alertify.error("Fallo :(");
				  limpiar(); 
		   }
		}
		});
}
function listarFacturas(id,fecha_in,fecha_fn,tipo,usuario){
    
    d=fecha_in.split('/');
    mes = d[0];  
    dia = d[1];
    año = d[2];
    fechain = año + "-" + mes + "-" + dia + " 00:00:00";
    
    tem=fecha_fn.split('/');
    mesf = tem[0];  
    diaf = tem[1];
    añof = tem[2];
    fechafn = añof + "-" + mesf + "-" + diaf + " 23:59:59";
     
    
    cadena="id=" + id +
           "&fechain=" + fechain  +
           "&fechafn=" + fechafn  +
           "&tipo=" + tipo +
		   "&usuario=" + usuario;
       
         
             $.ajax({
			 type:"POST",
			 url:"php/busqueda_fac.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
                    $('#tabla_factu').load('componentes/tabla_factu.php'); 
					$('#tabla_encargos').load('componentes/tabla_encargos.php'); 
					//alertify.success("Cleansed!");
                                
				}else{
		
					//alertify.error("Fallo el servidor :(");
                }
			 }
		     });
           
}
function mostrarFactura(id){
    
    
    cadena="id=" + id;
    
          
             $.ajax({
			 type:"POST",
			 url:"php/mostrarFactura.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
				  // alertify.success("Cleansed!");
                      $('#tabla_pro').load('componentes/tabla_pro.php'); 
                      $('#tablapro').load('componentes/tabla_pro.php');
				}else{
					// alertify.error("Fallo el servidor :(");
                     $('#tabla_pro').load('componentes/tabla_pro.php'); 
                     $('#tablapro').load('componentes/reporteDiario.php');
				}
			 }
		     });
    }
function cambiarFactura(id,observacion){
       
    cadena="id=" + id +
           "&observacion=" + observacion;
    alert("Listo !");
         
             $.ajax({
			 type:"POST",
			 url:"php/cambiarFactura.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
				   
                  //   $('#tabla_pro').load('componentes/tabla_pro.php'); 
				}else{
				   alertify.error("Fallo el servidor :(");
                    // $('#tabla_pro').load('componentes/tabla_pro.php'); 
				}
			 }
		     });
    }
function sumarainventario(pago){
   
    cadena="pago=" + pago;
    
             $.ajax({
			 type:"POST",
			 url:"php/sumarainventario.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
					//alertify.success("Cleansed!");
                   
                    
				}else{
					//alertify.error("Fallo el servidor :(");
                   
				}
			 }
		     });
}
function restarainventario(pago){
   
    cadena="pago=" + pago;
    
             $.ajax({
			 type:"POST",
			 url:"php/sumarainventario.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
					//alertify.success("Cleansed!");
                   
                    
				}else{
					//alertify.error("Fallo el servidor :(");
                   
				}
			 }
		     });
}
function preguntarSiNo(id){

	alertify.confirm('Pagar saldo ', '¿Esta seguro enviar esta solicitud?', 
					function(){ pagartortas(id) }
                , function(){ alertify.error('Se cancelo ')});
}
function pagartortas(id){
	
	
cadena="id=" + id;

$.ajax({
	type:"POST",
	url:"php/pagarTortas.php",
	data:cadena,
	success:function(r){
	   if(r==1){
		      alertify.success("Pago realizado!");
			  $('#tabla_encargos').load('componentes/tabla_encargos.php'); 
			 
	   }else{
		      alertify.error("Fallo el servidor :(");
		
	   }
	}
	});


}
function informacionPorHacer(){
	alertify.success("El pedido se esta realzado");

}
