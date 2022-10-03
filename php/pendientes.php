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
  <body>
  <a href="index.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
  <h1 class="h1">Pendientes</h1>

  <?php
  session_start();
  $usuario = $_SESSION['idu'];
  $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
  $consulta = "SELECT IDPublicacion,ID from pendientes where IDUsuario = '$usuario'";
  $res=$con->query($consulta);
$i=0;
$izq = 0;
$data = array();
while ($row = $res->fetch_assoc()) {
  $elegido=$row["IDPublicacion"];

  $consulta2= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where IDPublicacion=".$elegido."";

  $res2=mysqli_query($con, $consulta2);
$sal='';
  if($res2->num_rows > 0){
      while($datos = $res2->fetch_assoc()){
            //$data['status']='ok';
              $data[$i] = $datos;
              $sal.= "<div class='cardcont'style='margin-left:".$izq."%;height:250px;width:250px;' id=".$row['ID']." >";
              $sal.="<h2>".$data[$i]['TipoPrenda']."</h2>";
              $sal.="<h3>".$data[$i]['Nombre']." ".$data[$i]['Apellido']."</h2>";
              $sal.= "<img class='responsive-img' src=".$data[$i]['RutaFoto']." >";
              $sal.= "<button id='".$data[$i]['IDPublicacion']."|".$row['ID']."' class='removefav'></button>";
              $sal.= "</div>";
          $i++;
          $izq+=20;
      }
      echo $sal;
  }
}
?>
</body>
 
</html>