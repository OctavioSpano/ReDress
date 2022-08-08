<?php
$con = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($con,"prueba");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$data=array();

		$sql="Select IDUsuario from usuarios where Mail='".$_REQUEST['email']."' and Contrasenia='".$_REQUEST['password']."'";
		//echo $sql;

		$res=$con->query($sql);
		if($res->num_rows > 0){
			//EXISTE USUARIO CON ESA COMBINACION
	        $data['status'] = 'err';
	        $data['result'] = '';  
	    }else{
	    	$sql="INSERT INTO usuarios (Mail,Contrasenia,Nombre,Apellido,Telefono) VALUES ('".$_REQUEST['email']."','".$_REQUEST['password']."','".$_REQUEST['name']."','".$_REQUEST['apellido']."','".$_REQUEST['tel']."')";

	    	//echo $sql;
	        $res=$con->query($sql);

	        if ($res==1){
	        	$data['status'] = 'ok';
	        	$data['result'] = '1';	
	        }else{
	        	$data['status'] = 'error';
	        	$data['result'] = '';
	        }
	    }
    //retorno los datos en formato JSON
    echo json_encode($data);
	
	$con->close();
?>