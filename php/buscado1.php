<?php


$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$buscar = $_REQUEST['barrabusqueda'];
//echo $buscar;

$data=array();
//$consulta= "SELECT * FROM prendas p where TipoPrenda like '%".$buscar."%' ";

$consulta= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where TipoPrenda like '%".$buscar."%' or Descripcion like '%".$buscar."%' or Color LIKE '%".$buscar."%'";

$res=mysqli_query($con, $consulta);


$i=0;
	if($res->num_rows > 0){
      		while($datos = $res->fetch_assoc()){
              	//$data['status']='ok';
              	$data[$i] = $datos;
           		$i++;
	        }
	}
    
	echo json_encode($data);
	$con->close();
?>