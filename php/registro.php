<?php
 $mail=$_POST['mail'];
 $contra=$_POST['contra'];
 $confcontra=$_POST['confcontra'];
 $nombre=$_POST['name'];
 $apellido=$_POST['apellido'];
 $tel=$_POST['telefono'];


 $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
if ($confcontra == $contra){
	$consulta= "INSERT INTO usuarios (Mail,Contrasenia,Nombre,Apellido,Telefono) VALUES ('$mail','$contra','$nombre','$apellido','$tel')"; 
	$resultado=mysqli_query($con, $consulta);
	$lastid = mysqli_insert_id($con); 			 
}
 

  if($resultado)
  {
  	$consulta2= "SELECT * FROM usuarios where IDUsuario ='$lastid'";
 	$resultado2=mysqli_query($con, $consulta2);
 	session_start();
	$res2=$resultado2->fetch_array();
 	$_SESSION['idu']=$res2['IDUsuario'];
 	$_SESSION['nom']=$res2['Nombre']." ".$res2['Apellido'];
 	echo"<script>alert('Bienvenido! Se ha registrado correctamente!')</script>";
	header("location:index.php");
  }
	else{
		echo"<script>alert('Ha ocurrido un error, prueba nuevamente...');
		location.href ='registrar.php'; </script>";
		}

mysqli_close($con);
	
?>