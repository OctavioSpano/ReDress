<?session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body>
  	<div id="login-reg" class="acceso-usuario">
  		 <?
        if (isset($_SESSION['nom'])){
          echo $_SESSION['nom'];
          echo "<br><a href='LogOut.php'>Cerrar Sesión</a>";
        }else{
          echo '<a href="registrar.php">Registrarte |</a><a href="login.php"> Iniciar Sesión</a>';
        }
      ?>

    </div>
    <form id="searchbtn" action="">
      <img id="lupita" src="../imagenes/Imagen Lupa.png">
      <input type="search" name="barrabusqueda" placeholder="¿Qué estabas buscando?" class="barrabusqueda">
      
    </form>
    <div id="publicarbtn" >
      <button class="btnpublicar" onclick="location.href='publicar.php'">+</button>
  </div>
  <a href="index.php" >
  <img id="logofoto" src="../imagenes/Logo.png"  >
  </a>
  <a href="">
    <img id="corazon"src="../imagenes/Corazon.png">
  </a>  
  <a href="">
  <img id="campana"src="../imagenes/Campanita.png">
</a>
</a>  
  <a href="">
  <img id="mapa"src="../imagenes/Mapa.png">
</a>

</a>
  <a href="">
  <img id="btn_remera"src="../imagenes/Boton Remera.png">
</a>
  <a href="">
  <img id="btn_buzo"src="../imagenes/Boton hoodies.png">
</a>
  <a href="">
  <img id="btn_ropinterior"src="../imagenes/Boton ropa interior.png">
</a>
  <a href="">
  <img id="btn_zapas"src="../imagenes/Boton zapatillas.png">
</a>
  <a href="">
  <img id="btn_camperas"src="../imagenes/Boton camperas.png">
</a>
  <a href="">
  <img id="btn_shorts"src="../imagenes/Boton camperas (1).png">
</a>
</a>
  <a href="">
  <img id="btn_pantalones"src="../imagenes/Boton Pantalones.png">
</a>
  <a href="">
  <img id="rectangulo"src="../imagenes/Rectangulo.png">
</a>



</body>
</html>