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

		//alert('You pressed enter!');
		$.ajax({
		  type: 'POST',
		  url: '../php/buscado1.php',
          dataType: "json",
		  data: 'barrabusqueda=' + $("#barrabusqueda").val() ,
		  success: function (datos) {
					//alert (datos.result.Nombre);
					if(datos['status'] == 'ok'){
	                	prend="<label id='lblcard'>"+datos.result.Nombre +' '+ datos.result.Apellido+"</label>";
	                	prend+="<img id='imgcardcont' class='responsive-img' src= "+datos.result.RutaFoto+">";
	            		
	                }else{
						alert ("No hay nada");
	                }
            	$("#cardcont").html(prend);
            },
		  error: function(error) {
			    ;
   			},
		});

    }
	
});



});