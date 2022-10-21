<?php
session_start();
if(!isset($_SESSION['idu'])){
   header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="icon" href="../imagenes/Logo.png"> 

    <!--<link rel="stylesheet" href="../css/materialize.css" />-->
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <!--<script src="../js/materialize.js" type="text/javascript"></script>-->
    <script src="../js/redress.js" type="text/javascript"></script>
  </head>
  <body>
    <a href="homeScreen.php" >
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
              <!-- <div class="botonP">              -->
              <input id="botonP" name="botonP" class="txt botonP" type="Submit" value="Publicar">
              <!-- </div> -->
              
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
  <script>
(function(d){
var s = d.createElement("script");
/ uncomment the following line to override default position/
 s.setAttribute("data-position", 5);
/ uncomment the following line to override default size (values: small, large)/
 s.setAttribute("data-size", "small");
/ uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)/
s.setAttribute("data-language", "language");
/ uncomment the following line to override color set via widget (e.g., #053f67)/
 s.setAttribute("data-color", "#053e67");
/ uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)/
s.setAttribute("data-type", "1");
s.setAttribute("data-statement_text:", "Our Accessibility Statement");// s.setAttribute("data-statement_url", "http://www.example.com/accessibility")";/
/ uncomment the following line to override support on mobile devices/
s.setAttribute("data-mobile", true);
/ uncomment the following line to set custom trigger action for accessibility menu/
 s.setAttribute("data-trigger", "triggerId")
s.setAttribute("data-account", "c6OXOKvwCx");
s.setAttribute("src", "https://cdn.userway.org/widget.js");
(d.body || d.head).appendChild(s);})(document)
</script>
<noscript>
Please ensure Javascript is enabled for purposes of
<a href="https://userway.org">website accessibility</a>
</noscript>
</html>
