<?php
session_start();
$publi = $_REQUEST['IDP'];
$owner = $_REQUEST['IDO'];
$usuario = $_SESSION['idu'];
// if (isset($_SESSION['idu']){

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "INSERT INTO pendientes (IDPublicacion, IDOwner, IDUsuario ) VALUES (".$publi.",".$owner.",".$usuario.")";
echo $consulta;
$resultado=mysqli_query($con, $consulta);

// }
?>