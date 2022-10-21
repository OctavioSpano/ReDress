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
<!--     <link rel="stylesheet" href="../css/materialize.css" />
 --><link rel="stylesheet" href="../css/styles1.css" />
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script> 
    <script src="../js/redress.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--     <script src="../js/materialize.js" type="text/javascript"></script> -->

  </head>
  <body>
  <a href="homeScreen.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
  <h1 class="h1">Mis Prendas</h1>
  <div id="noticont" class="container-prendas">

  <?php
  session_start();
  $usuario = $_SESSION['idu'];
  $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
  $consulta = "SELECT * from prendas where IDUsuario = '$usuario'";
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
              // echo $data[$i]['IDPublicacion'];
              // echo $infolike['Nombre'] ." ".$infolike['Apellido'] ;
              $sal.= "<div class='cardcont'style='margin-left:".$izq."%;height:250px;width:250px;' >";
              $sal.= "<h2>".$data[$i]['TipoPrenda']."</h2>";
              $sal.= "<img class='responsive-img' src=".$data[$i]['RutaFoto']." ></br>";
              // $sal.= "<button id='".$row['IDPublicacion']."'class='editar' ></button></br>";
              $sal.= "<a id='".$row['IDPublicacion']."' class='editar btn-floating btn-large pulse'><i class='material-icons'>edit</i></a>";
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