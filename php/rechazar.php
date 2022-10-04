<?php
session_start();
$publi = $_REQUEST['IDpub'];
$usuario = $_SESSION['idu'];
echo ($publi);

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "DELETE FROM pendientes WHERE ID = ".$publi."";
$resultado=mysqli_query($con, $consulta);
// echo $consulta;

 


?>