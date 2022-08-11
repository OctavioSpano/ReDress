<?php
 $mail=$_POST['mail'];
 $contra=$_POST['contra'];
 session_start();
 $_SESSION['mail']=$mail;

 $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");

 $consulta= "SELECT*FROM usuarios where Mail='$mail' and Contrasenia='$contra'";
 $resultado=mysqli_query($con, $consulta);

 $filas=mysqli_num_rows($resultado);

 if($filas){
	header("location:index.php");
 }
	else{
		?>
		<?php
		include("login.php");
		?>
		<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
		<?php
	}
mysqli_free_result($resultado);
mysqli_close($con);
