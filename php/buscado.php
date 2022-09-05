<?php


$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$buscar = $_POST['barrabusqueda'];
//echo $buscar;


$consulta= "SELECT * FROM prendas where TipoPrenda like '%".$buscar."%'";
$res=mysqli_query($con, $consulta);

//echo $consulta;
$sal="";
		if($res->num_rows > 0){
			while($data = $res->fetch_assoc()){
	        	$sal.="<label>".$data['Descripcion']."</label><BR>";
	        	$consulta2 = "SELECT * FROM usuarios WHERE IDUsuario = ". $data['IDUsuario']."";
				$resultado=mysqli_query($con, $consulta2);
				$res2=$resultado->fetch_array();
           
	        	$sal .= "<label> Publicado por: ".$res2['Nombre']." ". $res2['Apellido']."</label><BR>";
	        	$sal.= "<img src = ".$data['RutaFoto'].">";		
	        	
	        }
	    }else{
	        
	    }
    //retorno los datos en formato JSON
    echo $sal;
	
	$con->close();

include ("encabezado.php")




?>