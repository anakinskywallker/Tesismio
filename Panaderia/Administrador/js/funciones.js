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
                $('#tabla').load('componentes/tabla1.php');
                $('#tablain').load('componentes/tabla_in.php');
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
function listarFacturas(id,fecha_in,fecha_fn,tipo){
    
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
    // alert(id);
    
    cadena="id=" + id +
           "&fechain=" + fechain  +
           "&fechafn=" + fechafn  +
           "&tipo=" + tipo;
       
         
             $.ajax({
			 type:"POST",
			 url:"php/busqueda_fac.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
                    $('#tabla_factu').load('componentes/tabla_factu2.php'); 
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
                    $('#tablapro').load('componentes/tabla_pro.php');
				}
			 }
		     });
    }
function cambiarFactura2(id,observacion){
       
    cadena="id=" + id +
           "&observacion=" + observacion;
   //alert("Listo !" );
         
             $.ajax({
			 type:"POST",
			 url:"php/cambiarFactura2.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
                    $('#tabla_factu').load('componentes/tabla_factu2.php'); 
                    $('#reporteDiario').load('componentes/reporteDiario.php');
				   
                  //   $('#tabla_pro').load('componentes/tabla_pro.php'); 
				}else{
                    $('#tabla_factu').load('componentes/tabla_factu2.php'); 
                    $('#reporteDiario').load('componentes/reporteDiario.php');
				   //alertify.error("Fallo el servidor :(");
                    // $('#tabla_pro').load('componentes/tabla_pro.php'); 
				}
			 }
		     });
    }
function suspenderempleado(id){
    
    cadena="id=" + id;
  
	$.ajax({
		type:"POST",
		url:"php/suspenderempleado.php",
		data:cadena,
		success:function(r){
			if(r==1){
                alertify.success("Suspendido ");
                $('#tabla_empleados').load('componentes/tabla_empleados.php');
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
    
}
function preguntarSiNo(id){
    
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este Empleado?', 
					function(){ suspenderempleado(id) }
                , function(){ alertify.error('Se cancelo')});
}
function agregaform(datos){

	d=datos.split('||');
    
    $('#mnombreusuario').val(d[0]);
	$('#mpasword').val(d[1]);
	$('#mnombre').val(d[2]);
	$('#mapellido').val(d[3]);
	$('#mcedula').val(d[4]);
	$('#mcelular').val(d[5]);
	$('#msalario').val(d[6]);
    $('#numero').val(d[7]);
	
}
function actualizaDatos(){
   //alertify.error("Fallo el servidor :(");
    nomus=$('#mnombreusuario').val();
	pasword=$('#mpasword').val();
	nombre=$('#mnombre').val();
	apellido=$('#mapellido').val();
	cedula=$('#mcedula').val();
	celular=$('#mcelular').val();
	salario=$('#msalario').val();
    id=$('#numero').val();
    
	

	cadena= "nomus=" + nomus +
            "&pasword=" + pasword +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&cedula=" + cedula +
            "&celular=" + celular +
			"&salario=" + salario +
            "&id=" + id;
    


	$.ajax({
		type:"POST",
		url:"php/actualizarDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_empleados').load('componentes/tabla_empleados.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
function guardarempleado(tipo){
        nomus=$('#nombreusuario').val();
	    pasword=$('#pasword').val();
	    nombre=$('#nombre').val();
	    apellido=$('#apellido').val();
	    cedula=$('#cedula').val();
	    celular=$('#celular').val();
	    salario=$('#salario').val();
    
    cadena= "nomus=" + nomus +
            "&pasword=" + pasword +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&cedula=" + cedula +
            "&celular=" + celular +
			"&salario=" + salario +
            "&tipo=" + tipo;
            
            
         
             $.ajax({
			 type:"POST",
			 url:"php/guardarempleado.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
                    $('#tabla_empleados').load('componentes/tabla_empleados.php');
					alertify.success("Empleado agregado!");
                                
				}else{
					alertify.error("Fallo el servidor :(");
                }
			 }
		     });
            
           
}
function preguntarSiNo2(tipo){

	alertify.confirm('Guardar Empleado', '¿Esta seguro agregar este empleado?', 
					function(){ guardarempleado(tipo) }
                , function(){ alertify.error('Se cancelo')});
}
function listarpruductos(id,tipo){
    
    
    
    cadena="id=" + id +
           "&tipo=" + tipo;
       
         
             $.ajax({
			 type:"POST",
			 url:"php/agregaraaux.php",
			 data:cadena,
			 success:function(r){
				if(r==1){
                    $('#tablaproductos').load('componentes/tabla_productos.php');
					alertify.success("listo!");
                                
				}else{
					alertify.error("Fallo el servidor :(");
                }
			 }
		     });
           
}
function agregaform2(datos){

	d=datos.split('||');
    
    
    $('#numero').val(d[0]);
	$('#nombrep').val(d[1]);
	$('#tipo').val(d[2]);
	$('#clase').val(d[3]);
	$('#costo').val(d[4]);
	$('#precio').val(d[5]);
	$('#catidad').val(d[6]);
   
	
}
function actualizaDatos2(){
   //alertify.error("Fallo el servidor :(");
    id=$('#numero').val();
	nombrep=$('#nombrep').val();
	tipo=$('#tipo').val();
	clase=$('#clase').val();
	costo=$('#costo').val();
	precio=$('#precio').val();
	cantidad=$('#catidad').val();
    
	

	cadena= "id=" + id +
            "&nombrep=" + nombrep + 
			"&tipo=" + tipo +
			"&clase=" + clase +
            "&costo=" + costo +
			"&precio=" + precio +
            "&cantidad=" + cantidad;
    


	$.ajax({
		type:"POST",
		url:"php/actualizarDatosproductos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tablaproductos').load('componentes/tabla_productos.php');
                $('#tablaproductos2').load('componentes/tabla_reventas.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
function preguntarSiNoProductos(id){
    
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este Producto?', 
					function(){ suspenderproducto(id) }
                , function(){ alertify.error('Se cancelo')});
}
function suspenderproducto(id){
    
    cadena="id=" + id;
  
	$.ajax({
		type:"POST",
		url:"php/suspenderproducto.php",
		data:cadena,
		success:function(r){
			if(r==1){
                alertify.success("Suspendido ");
                $('#tablaproductos').load('componentes/tabla_productos.php');
                $('#tablaproductos2').load('componentes/tabla_reventas.php');
                
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
    
}
function preguntarSiNoprueba(id){
	alertify.confirm('Pagar saldo', '¿Esta seguro enviar esta solicitud?', 
	function(){ alertify.success('paso') }
, function(){ alertify.error('Se cancelo')});

}
