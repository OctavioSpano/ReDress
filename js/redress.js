$(document).ready(function(){


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
	if(e.which == 13) {
		$izq=0;
		prend='';
		//alert('You pressed enter!');
		$.ajax({
		  type: 'POST',
		  url: '../php/buscado1.php',
          dataType: "json",
		  data: 'barrabusqueda=' + $("#barrabusqueda").val() ,
		  success: function (datos) {
					//alert (datos.result.Nombre);
						
						$.each(datos, function(i, item) {
								//console.log(item);
								//alert ("<div id=card"+i+" class='cardcont'>");
								prend+="<div id= 'card"+i+"' class='cardcont'>";
								prend+="<label id='lblcard'>"+item.Nombre +' '+ item.Apellido+"</label>";
	                			prend+="<img id='imgcardcont' class='responsive-img' src= "+item.RutaFoto+">";
	            				prend+="</div>";
                    			$("#prendascont").append(prend);
                    			$("#card"+i+"").css("left",$izq+"%");
	            				$izq+=27;
                    	});
	              	
            			
            },
		  error: function(error) {
			    ;
   			},
		});

    }
	
});



});