<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <script src="../js/redress.js" type="text/javascript"></script>
  </head>
  <body>
    <a href="index.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
    <form id="frm1" method="POST" action="publicacion.php" enctype="multipart/form-data">
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
             
              <div class="lbl_desc">
                  <label for="desc">Descripción: </label>
                 <textarea class="lbl_desc"name="desc" rows="5" resize></textarea>
                  <span></span>
              </div>
               <div class="form-group">
                <input class="file-input" type="file" name="uploadfile" id="ufile" value="" require accept="image/*" />
                <div id="prew"></div>
              </div>

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
              <label class="lblColor">Color: </label>
              <input type="text" name="color">

              

          
      <!--</div>-->
  </div>
  </form>
  </body>
</html>
