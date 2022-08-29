<?php

if (isset("#btnBusqueda")){
$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$buscar = $_POST['barranavegacion'];
echo $buscar;

}
/*$consulta= "SELECT * FROM prendas where TipoPrenda ='$lastid'";
$resultado=mysqli_query($con, $consulta);
*/



?>