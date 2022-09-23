$(document).ready(function(){

prendainicio();


function prendainicio(){
		$izq=0;
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
	                			prend+= "<button id='btnMatch"+i+"'>";
	            				prend+="</div>";
                    			$("#prendascont").append(prend);

                    			$("#card"+i+"").css("left",$izq+"%");
	            				$izq+=27;
	            				// $("#imgcardcont").append(details);
	            			
	            		});
	              	
            			
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
	//$("#prendascont").empty();
	if(e.which == 13) {
		$izq=0;
		$contador = 0;
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
	                			prend+= "<button id='btnMatch"+i+"' onclick=LoQuiero()>";
	            				prend+="</div>";
                    			$("#prendascont").append(prend);

                    			$("#card"+i+"").css("left",$izq+"%");
	            				$izq+=27;
	            				$contador+= 1;
	            				$("#imgcardcont").append(details);
                    	});
	              	
            			
            },
		  error: function(error) {
			    ;
   			},
		});

    }
	
});

<?php 
function LoQuiero(){


?>

}

});