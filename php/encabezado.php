<?session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
     <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
     <script src="../js/redress.js" type="text/javascript"></script> 
     <link rel="icon" href="../imagenes/Logo.png"> 
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
    <form id="searchbtn" action="buscado.php" method="POST">
      <img id="lupita" src="../imagenes/Imagen Lupa.png">
      <input type="text" id= "barrabusqueda" name="barrabusqueda" placeholder="¿Qué estabas buscando?" class="barrabusqueda">	      
    </form>
    <div id="publicarbtn" >
      <button class="btnpublicar" onclick="location.href='publicar.php'">+</button>
  </div>
  <a href="index.php" >
  <img id="logofoto" src="../imagenes/Logo.png"  >
  </a>
  <a href="pendientes.php">
    <img id="pendientes"src="../imagenes/RelojArena.png">
  </a>  
  <a href="notificaciones.php">
  <img id="campana"src="../imagenes/Campanita.png">
</a>
</a>  
  <a href="localizacion.php">
  <img id="btn_mapa"src="../imagenes/Mapa.png">
</a>

</a>
  <a href="buscado.php">
  <img id="btn_remera"src="../imagenes/Boton Remera.png">
</a>
  <a href="buscado.php">
  <img id="btn_buzo"src="../imagenes/Boton hoodies.png">
</a>
  <a href="buscado.php">
  <img id="btn_ropinterior"src="../imagenes/Boton ropa interior.png">
</a>
  <a href="buscado.php">
  <img id="btn_zapas"src="../imagenes/Boton zapatillas.png">
</a>
  <a href="buscado.php">
  <img id="btn_camperas"src="../imagenes/Boton camperas.png">
</a>
  <a href="buscado.php">
  <img id="btn_shorts"src="../imagenes/Boton camperas (1).png">
</a>
</a>
  <a href="buscado.php">
  <img id="btn_pantalones"src="../imagenes/Boton Pantalones.png">
</a>




</body>
