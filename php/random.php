<?php
$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
mysqli_select_db($con,"prendas");



$consulta = "SELECT IDPublicacion FROM prendas ORDER BY RAND() LIMIT 4";
$res=$con->query($consulta);
while ($row = $res->fetch_assoc()) {
  $elegido=$row["IDPublicacion"];
}

$consulta2= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where IDPublicacion=".$elegido."";

$res2=mysqli_query($con, $consulta2);

$data=array();
$i=0;
	if($res2->num_rows > 0){
      		while($datos = $res2->fetch_assoc()){
              	//$data['status']='ok';
              	$data[$i] = $datos;
           		$i++;
	        }
	}
    
	echo json_encode($data);
	$con->close();
    ?>