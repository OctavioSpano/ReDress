$(document).ready(function(){

prendainicio();


function prendainicio(){
		$("#prendascont").html("");
		contador=0;
		izq=0;
		prend='';
		details='';
		//alert('You pressed enter!');
		$.ajax({
		  type: 'POST',
		  url: '../php/random.php',
          dataType: "json",
		  //data: 'barrabusqueda=' + $("#barrabusqueda").val() ,
		  success: function (datos) {
					//alert (datos.result.Nombre);
						
						$.each(datos, function(i, item) {
								//console.log(item);
								//alert ("<div id=card"+i+" class='cardcont'>");
								prend+="<div id= 'card"+i+"' class='cardcont'>";
								prend+="<label id='lblcard'>"+item.Nombre +' '+ item.Apellido+"</label>";
	                			prend+="<img id='imgcardcont' class='responsive-img' src= "+item.RutaFoto+">";
	                			prend+="<div class='inside'>";
	                			prend+= "<i id='info_outline' class='small material-icons'>info_outline</i>";
	                			prend+= "<br><label id ='lbldescCard'> Descripcion: " + item.Descripcion + "</label>";
	                			prend+= "<br><label id ='lbltalleCard'> Talle: " + item.Talle + "</label>";
	                			prend+= "<br><label id ='lblusadoCard'> Usado: " + item.Usado + "</label>";
	                			prend+= "<br><label id ='lblcolorCard'> Color: " + item.Color + "</label>";
	                			prend+= "</div>";
	                			prend+= "<button class='que' id='"+item.IDPublicacion+"|"+item.IDUsuario+"'>";
	            				prend+="</div>";
                    			
	            				contador++;
                    			// $("#imgcardcont").append(details);
	            			
	            		});
	              		$("#prendascont").append(prend);
                    	for(y=0;y<contador;y++){
							$("#card"+y+"").css("left",izq+"%");
	            			izq+=27;
                    	}
						quiero();
            			
            },
		  error: function(error) {
			    ;
   			},
		});
		
}


function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#prew').html('<img class="responsive-img" src="'+event.target.result+'" width="auto" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}

$("#ufile").change(function () {
    imagePreview(this);
});

$("#barrabusqueda").keydown(function(e){
	$("#prendascont").html("");
	if(e.which == 13) {
		izq=0;
		contador=0;
		prend='';
		details='';
		//alert('You pressed enter!');
		$.ajax({
		  type: 'POST',
		  url: '../php/buscado1.php',
          dataType: "json",
		  data: 'barrabusqueda=' + $("#barrabusqueda").val() ,
		  success: function (datos) {
					//alert (datos.result.Nombre);
						$("#prendascont").empty();
						console.log(datos);
						$.each(datos, function(i, item) {
								//console.log(item);
								//alert ("<div id=card"+i+" class='cardcont'>");
								prend+="<div id='card"+i+"' class='cardcont'>";
								prend+="<label id='lblcard'>"+item.Nombre +' '+ item.Apellido+"</label>";
	                			prend+="<img id='imgcardcont' class='responsive-img' src= "+item.RutaFoto+">";
	                			prend+="<div class='inside'>";
	                			prend+= "<i id='info_outline' class='small material-icons'>info_outline</i>";
	                			prend+= "<br><label id ='lbldescCard'> Descripcion: " + item.Descripcion + "</label>";
	                			prend+= "<br><label id ='lbltalleCard'> Talle: " + item.Talle + "</label>";
	                			prend+= "<br><label id ='lblusadoCard'> Usado: " + item.Usado + "</label>";
	                			prend+= "<br><label id ='lblcolorCard'> Color: " + item.Color + "</label>";
	                			prend+= "</div>";
	                			prend+= "<button class='que' id='"+item.IDPublicacion+"|"+item.IDUsuario+"'>";
	            				prend+="</div>";
                    			
	            				contador++;
                    			//$("#imgcardcont").append(details);
	            				//alert (i);
                    	});
                    	$("#prendascont").append(prend);
                    	for(y=0;y<contador;y++){
							$("#card"+y+"").css("left",izq+"%");
	            			izq+=27;
                    	}
	              	
            			quiero();
            },
		  error: function(error) {
			    ;
   			},
		});

    }
	
});


function quiero(){
	$(".que").click(function(e){
		dat=$(this).prop("id").split("|");
		alert (dat[0]+"xxxx"+dat[1]);
		// $.ajax({
		// 	  type: 'POST',
		// 	  url: '../php/reserva.php',
	 //          dataType: "json",
		// 	  data: 'IDP=' + dat[0]+'&IDO='+dat[1]+'' ,
		// 	  success: function (datos) {
		// 		$.each(datos, function(i, item) {
						
  //           	});
  //           },
		//   error: function(error) {
		// 	    ;
  //  			},
		// });
		


			//alert ($(this).prop('id'));
	});
}

});