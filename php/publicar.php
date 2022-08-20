<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body>
    <a href="index.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
    <form id="frm1" method="POST" action="publicacion.php">
  	<div class="container">
      <!--<div class="centerpub">-->
              <h1 class="h1">Publicá tu prenda</h1>
              

              <div class="tipo_prenda">
                <input list="tipo_prenda" id="lista_prendas" name="lista_prendas" placeholder="Tipo de prenda: "/>
                <datalist id="tipo_prenda">
                  <option value="Remera"></option>
                  <option value="Pantalon"></option>
                  <option value="Buzo/Hoodie"></option>
                  <option value="Campera"></option>
                  <option value="Short/Bermuda"></option>
                  <option value="Ropa Interior"></option>
                  <option value="Zapatillas"></option>
                </datalist>
              </div>
             
              <div class="txt_pub">
                  <label id="lbldesc"for="desc">Descripción: </label>
                  <input type="text" id="desc" name="desc" required>
                  <span></span>
                  
              </div>
              
                <label class="file-input" for="file">
                <div class="drop-zone"> <p><b>Select a file</b> or drop it here!</p>
                </div>
                <input type="file" id="file">
                </label>
              
              <div class="botonP">             
              <input id="botonP" class="txt" type="Submit" value="Publicar">
              </div>
          
      <!--</div>-->
  </div>
  </form>
  </body>
</html>
