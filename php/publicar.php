<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script src="../js/redress.js" type="text/javascript"></script>   

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
                <label class="file-input" id="labelFI" for="file">
                <div class="drop-zone"> <p><b>Select a file</b> or drop it here!</p>
                </div>
                <input type="file" id="file">
                </label>

              <label class="lblUsado">Usado: </label>
              <input type = "checkbox" name = "chbxUsado" class = "chbxUsado">
              <div class="botonP">             
              <input id="botonP" name="botonP" class="txt" type="Submit" value="Publicar">
              </div>
              <label class="lblTalle">Talle: </label>
              <div class="lista_talle">
                <select name="talles">
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="3">L</option>
                  <option value="4">XL</option>
                  <option value="5">XXL</option>
              </select>
              </div>

              

          
      <!--</div>-->
  </div>
  </form>
  </body>
</html>
