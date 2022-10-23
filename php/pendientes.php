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
    <link rel="icon" href="../imagenes/Logo.png"> 

   <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <script src="../js/redress.js" type="text/javascript"></script>

  </head>
  <body>
  <a href="homeScreen.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
  <h1 class="h1">Pendientes</h1>
<div id="pendientescont" class="container-prendas">
  <?php
  session_start();
  $usuario = $_SESSION['idu'];
  $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
  $consulta = "SELECT IDPublicacion,ID from pendientes where IDUsuario = '$usuario'";
  $res=$con->query($consulta);
$i=0;
$izq = 5;
$data = array();
while ($row = $res->fetch_assoc()) {
  $elegido=$row["IDPublicacion"];

  $consulta2= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where Disponible = 0 AND IDPublicacion=".$elegido."";

  $res2=mysqli_query($con, $consulta2);
$sal='';
  if($res2->num_rows > 0){
      while($datos = $res2->fetch_assoc()){
            //$data['status']='ok';
              $data[$i] = $datos;
              $sal.= "<div class='cardcont'style='margin-left:".$izq."%;height:250px;width:250px;' id=".$row['ID']." >";
              //  $sal.="<h2>".$data[$i]['TipoPrenda']."</h2>";
              $sal.="<h3>".$data[$i]['Nombre']." ".$data[$i]['Apellido']."</h2>";
              $sal.= "<img class='responsive-img' src=".$data[$i]['RutaFoto']." ></br>";
              $sal.= "<a id='".$data[$i]['IDPublicacion']."|".$row['ID']."' class='removefav'>";
              $sal.= "<img src = '../imagenes/Tacho.png' style='height:50;width:50px;'>";
              // $sal.="</button>";
              $sal.= "</div>";
          $i++;
          $izq+=25;
      }
      echo $sal;
  }
}
?>
</div>
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