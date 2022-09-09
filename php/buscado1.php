<?php


$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$buscar = $_POST['barrabusqueda'];
//echo $buscar;

$data=array();
$consulta= "SELECT *,u.Nombre,u.Apellido FROM prendas p INNER JOIN usuarios u ON p.IDUsuario=u.IDUsuario where TipoPrenda like '%".$buscar."%' ";
$res=mysqli_query($con, $consulta);


		if($res->num_rows > 0){
      $i=0;
			     while($datos = $res->fetch_assoc()){
              $data['status']='ok';
              $data['result'] = $datos;
           
	        }
	  }
    
	echo json_encode($data);
	$con->close();
?>