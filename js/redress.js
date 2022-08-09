$(document).ready(function(){

$("#botonL").click(function(){
	$.ajax({
		  type: 'POST',
		  url: '../php/login.php',
          dataType: "json",
		  data: 'mail=' + $("#email").val() + '&contra='+ $("#password").val(),
		  success: function (datos) {
				if(datos.status == 'ok'){
                	mensaje="Bienvenido mi estimado "+datos.result['Nombre']+" "+datos.result['Apellido']+"";
                	$("#divt").html(mensaje);
                	$("#divt").show();
                }else{
					mensaje="Usuario no encontrado,si desea registrarse haga click: ";
	               	mensaje+="<a href='http://localhost/FG_ReDress/ReDress/html/registrar.html' /a>aqui.";
	               	$("#divt").html(mensaje);
	               	$("#divt").show();
                }
            },
		  error: function(error) {
			    ;
   			},
		});
});


$("#botonR").click(function(){
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