<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/materialize.css" />
    <link rel="stylesheet" href="../css/styles1.css" />
     <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
     <script src="../js/materialize.js" type="text/javascript"></script> 
     <script src="../js/redress.js" type="text/javascript"></script> 
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
  </head>
    <body>
  	<div id="login-reg" class="acceso-usuario">
  		 

    </div>
    <!--<form id="searchbtn" action="" method="">-->
     <div class="row">
        <div class="col s12 l1">
            <a href="index.php"><img src="../imagenes/Logo.png" class="responsive-img"></a>
        </div>
        <div class="col s12 l1">
            <i id="lupita" class="medium material-icons">search</i>
            <!--<img id="lupita"  class="responsive-img" src="../imagenes/Imagen Lupa.png">-->
         </div>
         <div class="col s12 l4">
            <input type="text" id= "barrabusqueda" name="barrabusqueda" placeholder="¿Qué estabas buscando?" class="barrabusqueda">	      
        </div>
        <div class="col s2 l1">
            <a href="pendientes.php" id="btnpendientes">
                <i class="medium material-icons">hourglass_empty</i>
                <!--<img class="responsive-img" id="pendientes"src="../imagenes/RelojArena.png">-->
              </a>  
        </div>
        <div class="col s2 l1">
              <a href="notificaciones.php" id="btnnotificaciones">
                <i class="medium material-icons">notifications</i>
                <!--<img class="responsive-img" id="campana"src="../imagenes/Campanita.png">-->
            </a>
        </div>
        <div class="col s2 l1">  
              <a href="localizacion.php" id="btnmapa">
                <i class="medium material-icons">location_on</i>
                <!--<img class="responsive-img" id="btn_mapa"src="../imagenes/Mapa.png">-->
            </a>
        </div>
        <div class="col s6 l6" id="acceso-usuario">
              <?php
              if (isset($_SESSION['nom'])){
                echo $_SESSION['nom'];
                echo "<br><a href='LogOut.php'>Cerrar Sesión</a>";
              }else{
                echo '<a href="registrar.php">Registrarte |</a><a href="login.php"> Iniciar Sesión</a>';
              }
            ?>
        </div>
    </div>
    <!--</form>-->
    
</a>
<div class="row">
        <div class="col s4 l15">
            <a id="remera" class="atajos boton waves-effect waves-light btn">Remeras</a><!--            <a href="buscado1.php">
            <img id="btn_remera"src="../imagenes/Boton Remera.png">
          </a>-->
        </div>
        <div class="col s4 l15">
            <a id="hoodie" class="atajos boton waves-effect waves-light btn">Buzos</a>
<!--            <a href="buscado1.php">
            <img id="btn_buzo"src="../imagenes/Boton hoodies.png">
            </a>-->
        </div>
        <div class="col s4 l15">
            <a id="Interior" class="atajos boton waves-effect waves-light btn">Ropa Int.</a>
<!--            <a href="buscado1.php">
            <img id="btn_ropinterior"src="../imagenes/Boton ropa interior.png">
            </a>-->
        </div>
        <div class="col s4 l15">    
            <a id="zapa" class="atajos boton waves-effect waves-light btn">Zapatillas</a>
<!--        <a href="buscado1.php">
            <img id="btn_zapas"src="../imagenes/Boton zapatillas.png">
            </a>-->
        </div>
        <div class="col s4 l15">
            <a id="campera" class="atajos boton waves-effect waves-light btn">Camperas</a>
<!--        <img id="btn_camperas"src="../imagenes/Boton camperas.png">
            </a>-->
        </div>
        <div class="col s4 l15">
            <a id="short" class="atajos boton waves-effect waves-light btn">Shorts</a>
<!--            <img id="btn_shorts"src="../imagenes/Boton camperas (1).png">
                </a>-->
        </div>
        <div class="col s4 l15">       
            <a id="panta" class="atajos boton waves-effect waves-light btn">Pantalones</a>
<!--          <img id="btn_pantalones"src="../imagenes/Boton Pantalones.png">
              </a>-->
        </div>
</div>
<div class="prendascont">
        <div class="col s4 l2"></div>
</div>
<!--<button value="remera" onclick="atajosfunc() "id="btnRem">
  <img id="btnremera"src="../imagenes/Boton Remera.png">
</button>
!-->

<div id="publicarbtn" >
      <a href="publicar.php" id="btnpublicar" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons" id="btnpublicar">add</i></a>
      <!--<button class="btnpublicar" onclick="location.href='publicar.php'">+</button>-->
  </div>

  

</body>
