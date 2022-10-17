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
    <link rel="stylesheet" href="../css/styles1.css" />
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <script src="../js/redress.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  </head>
  <body>
  <a href="homeScreen.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
  <h1 class="h1">Notificaciones</h1>
  <div id="noticont" class="container-prendas">

  <?php
  session_start();
  $usuario = $_SESSION['idu'];
  $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
  $consulta = "SELECT * from pendientes where IDOwner = '$usuario'";
  $res=$con->query($consulta);
$i=0;
$izq = 5;
$data = array();
while ($row = $res->fetch_assoc()) {
  $elegido=$row["IDPublicacion"];
  $usuariolike=$row["IDUsuario"];

  $consulta2= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where Disponible = 0 AND IDPublicacion=".$elegido."";

  $res2=mysqli_query($con, $consulta2);

  if($res2->num_rows > 0){
      while($datos = $res2->fetch_assoc()){

        $consu="SELECT * from usuarios where IDUsuario = ".$usuariolike."";
        $res3 = mysqli_query($con, $consu);
        $sal='';
        while($infolike = $res3->fetch_assoc()){
              $data[$i] = $datos;
              $sal.= "<div class='cardcont'style='margin-left:".$izq."%;height:250px;width:250px;' >";
              $sal.= "<h2>".$data[$i]['TipoPrenda']."</h2>";
              $sal.= "<h3>A ".$infolike['Nombre'] ." ".$infolike['Apellido']." le ha gustado tu prenda</h2>";
              $sal.= "<img class='responsive-img' src=".$data[$i]['RutaFoto']." ></br>";
              $sal.= "<button id='".$row['ID']."'class='aceptar' ></button></br>";
              $sal.= "</br>";
              $sal.= "<button id='".$row['ID']."' class='rechazar btndel btn-delete'>";
              $sal.= "<span class='mdi mdi-delete mdi-24px'></span>";
              $sal.="<span class='material-icons predelete'>delete</span>";
              $sal.= "<span class='material-icons delete'>delete_forever</span>";
              $sal.= "<span>RECHAZAR</span>";
              // $sal.= "</button>";
              $sal.= "</div>";
          $i++;
          $izq+=20;
        }
        
      }
  }
  echo $sal;
}

?>

</div>
</body>
</html>