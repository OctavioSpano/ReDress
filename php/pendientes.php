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
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <script src="../js/redress.js" type="text/javascript"></script>

  </head>
  <a href="index.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
  <h1 class="h1">Pendientes</h1>

  <?php
  session_start();
  $usuario = $_SESSION['idu'];
  $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
  $consulta = "SELECT IDPublicacion from pendientes where IDUsuario = '$usuario'";
  $res=$con->query($consulta);
$i=0;
$izq = 0;
$data = array();
while ($row = $res->fetch_assoc()) {
  $elegido=$row["IDPublicacion"];

  $consulta2= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where IDPublicacion=".$elegido."";

  $res2=mysqli_query($con, $consulta2);

  if($res2->num_rows > 0){
      while($datos = $res2->fetch_assoc()){
            //$data['status']='ok';
              $data[$i] = $datos;
              echo "<div style='margin-left:".$izq."%;height:250px;width:250px;' >";
              echo "<h2>".$data[$i]['TipoPrenda']."</h2>";
              echo "<h3>".$data[$i]['Nombre']." ".$data[$i]['Apellido']."</h2>";
              echo "<img class='img-responsive' src=".$data[$i]['RutaFoto']." style='border-radius:60;heigth:150px;width:150px;'>";
              echo "<button id='".$data[$i]['IDPublicacion']."'class='removefav'></button>";
              echo "</div>";
          $i++;
          $izq+=20;
      }
  }
}
