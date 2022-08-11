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
}
 

  if($resultado)
  {
	echo"<script>alert('Bienvenido! Se ha registrado correctamente!');
	location.href ='index.php'; </script>";
  }
	else{
		echo"<script>alert('Ha ocurrido un error, prueba nuevamente...');
		location.href ='registrar.php'; </script>";
		}

mysqli_close($con);
	
?>