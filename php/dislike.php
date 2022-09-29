<?php
session_start();
$publi = $_REQUEST['ID'];
$usuario = $_SESSION['idu'];

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "DELETE FROM pendientes WHERE IDUsuario = ".$usuario." AND IDPublicacion = ".$publi."";
echo $consulta;
$resultado=mysqli_query($con, $consulta);
 


?>