<?php
session_start();
$publi = $_REQUEST['IDpub'];
$usuario = $_SESSION['idu'];
echo ($publi);

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "DELETE FROM pendientes WHERE IDUsuario = ".$usuario." AND IDPublicacion = ".$publi."";
$resultado=mysqli_query($con, $consulta);
// echo $consulta;

 


?>