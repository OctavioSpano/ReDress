$(document).ready(function(){

$("#boton").click(function(){
	$.ajax({
		  type: 'POST',
		  url: '../php/validar.php',
          dataType: "json",
		  data: 'usu=' + $("#u").val() + '&pass='+ $("#p").val() + '&que=L',
		  success: function (datos) {
				if(datos.status == 'ok'){
                	mensaje="Bienvenido mi estimado "+datos.result['Nombre']+" "+datos.result['Apellido']+"";
                	$("#divt").html(mensaje);
                	$("#divt").show();
                }else{
					mensaje="Usuario no encontrado,si desea registrarse haga click: ";
	               	mensaje+="<a href='../html/registrar.html' /a>aqui.";
	               	$("#divt").html(mensaje);
	               	$("#divt").show();
                }
            },
		  error: function(error) {
			    ;
   			},
		});
});


$("#R").mouseover(function(){
	$(".boton").css("cursor","pointer");
});

$("#R").click(function(){
	if (validar()){
		$.ajax({
			  type: 'POST',
			  url: '../php/registrar.php',
	          dataType: "json",
			  data: 'usu=' + $("#u").val() + '&pass='+ $("#p").val() + '&nom='+$("#n").val()+'&ape='+$("#a").val()+'&dni='+$("#d").val(),
			  success: function (datos) {
					if(datos.status == 'ok'){
	                	window.location.assign("../html/index.html");
	                }else if (datos.status=='err'){
						mensaje="Usuario ya existente";
		               	$("#divt").html(mensaje);
		               	$("#divt").show();
	                }else{
	                	mensaje="Ocurrio un error";
		               	$("#divt").html(mensaje);
		               	$("#divt").show();
	                }
	            },
			  error: function(error) {
				    ;
	   			},
			});
		}
});

function validar(){
	salida=true;
	mensaje='';
	if ($("#u").val()==''){
		salida=false;
		mensaje="Falta el Usuario";
		$("#u").focus();
	}else if($("#p").val()==''){
		salida=false;
		mensaje="Falta la Contraseña";
		$("#p").focus();
	}else if($("#n").val()==''){
		salida=false;
		mensaje="Falta el Nombre";
		$("#n").focus();
	}else if($("#a").val()==''){
		salida=false;
		mensaje="Falta el Apellido";
		$("#a").focus();
	}else if($("#d").val()==''){
		salida=false;
		mensaje="Falta el DNI";
		$("#d").focus();
	}
	$("#divt").html(mensaje);
	$("#divt").show();
	return salida;
}
/*

$("#R").mouseover(function(){
	$(".boton").css("cursor","pointer");
});
$("#R").click(function(){
	$.ajax({
		  type: 'POST',
		  url: '../php/registrar.php',
          dataType: "json",
		  data: 'usu=' + $("#u").val() + '&pass='+ $("#p").val() + '&nom='+$("#n").val()+'&ape='+$("#a").val()+'&dni='+$("#d").val(),
		  success: function (datos) {
				if(datos.status == 'ok'){
                	window.location.assign("../html/index.html");
                }else if (datos.status == 'err'){
					mensaje="Usuario y contraseña existente";
					$("#divt").html(mensaje);
					$("#divt").show();
				}else{
					mensaje="Ocurrio un error";
					$("#divt").html(mensaje);
					$("#divt").show();
				}
            },
		  error: function(error) {
			    ;
   			},
		});
});
*/



});