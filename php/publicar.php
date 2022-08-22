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
                <select name="prenda">
                  <option value="0">Pantalones</option>
                  <option value="1">Remeras</option>
                  <option value="2">Hoodies</option>
                  <option value="3">Ropa interior</option>
                  <option value="4">Zapatillas</option>
                  <option value="5">Camperas</option>
                  <option value="6">Short/Bermuda</option>
              </select>
              </div>
             
              <div class="txt_pub">
                  <label for="desc">Descripción: </label>
                  <input type="text" id="desc" name="desc" required>
                  <span></span>
                  
              </div>
              
                <label class="file-input" for="file">
                <div class="drop-zone"> <p><b>Select a file</b> or drop it here!</p>
                </div>
                <input type="file" id="file">
                </label>
              
              <label class="lblUsado">Usado: </label>
              <input type = "checkbox" name = "chbxUsado" class = "chbxUsado">

              <div class="botonP">             
              <input id="botonP" name="botonP" class="txt" type="Submit" value="Publicar">
              </div>

              

          
      <!--</div>-->
  </div>
  </form>
  </body>
</html>
