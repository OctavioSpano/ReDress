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
                <label class="lblPrendas">Tipo de prenda: </label>
                <select name="prenda">
                  <option value="Pantalones">Pantalones</option>
                  <option value="Remeras">Remeras</option>
                  <option value="Hoodies">Hoodies</option>
                  <option value="Ropa interior">Ropa interior</option>
                  <option value="Zapatillas">Zapatillas</option>
                  <option value="Camperas">Camperas</option>
                  <option value="Short/Bermuda">Short/Bermuda</option>
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
              
              <div class="lista_talle">
              <label class="lblTalle">Talle: </label>
                <select name="talles">
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
              </select>
              </div>

              

          
      <!--</div>-->
  </div>
  </form>
  </body>
</html>
