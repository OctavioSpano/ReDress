<?php
 
$link = new mysqli("localhost", "root", "rootroot");
mysqli_select_db($link, "redressbd");
if ($link ->connect_error){
    die("Connection failed: " . $link->connect_error);
    }

$data = array ();
		
	$sql = "Select IDUsuario, Nombre, Apellido from usuarios where Mail='" . $_REQUEST ['Mail'] . "'and Contrasenia='" . $_REQUEST ['Contrasenia']."'";
	$res = $link->query($sql);
	$i = 0;
		if ($res -> num_rows > 0){
			$userData = $res -> fetch_assoc();
			/*while($userData = $res -> fetch_assoc()){
				$data['status'] = 'ok';
				$data [$i] = $userData;		
			}*/
			$data ['status'] = 'ok';
			$data ['result'] = $userData;
		}else{
			$data ['status'] = 'err';
			$data ['result'] = '';
		} 
		//retorno los datos en formato json
		echo json_encode($data);
		$link->close();

    
	
?>
