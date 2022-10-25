<?php
session_start();
if(!isset($_SESSION['idu'])){
   header("Location:login.php");
}


$publi = $_REQUEST['IDP'];
$owner = $_REQUEST['IDO'];
$usuario = $_SESSION['idu'];

echo $publi;
echo $owner;

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "INSERT INTO pendientes (IDPublicacion, IDOwner, IDUsuario ) VALUES ('$publi','$owner','$usuario')";
// echo $consulta;
$resultado=mysqli_query($con, $consulta);

$consul2 = "SELECT * from usuarios WHERE IDUsuario = '$owner'";
$resultado2=mysqli_query($con, $consul2);
$infoOwner = $resultado2 -> fetch_assoc();
// echo $infoOwner['Mail'];

$consul3 = "SELECT * from usuarios WHERE IDUsuario = '$usuario'";
$resultado3=mysqli_query($con, $consul3);
$infoUser = $resultado3 -> fetch_assoc();


	$to = $infoOwner['Mail'];
 	$nameOwner = $infoOwner['Nombre'];
 	$apeOwner = $infoOwner['Apellido'];

 	$nameLiker = $infoUser['Nombre'];
 	$apeLiker = $infoUser['Apellido'];

    $pword = "obyhwpzprnuhbclq";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

 	$mail = new PHPMailer(true);

	try{
		$mail -> SMTPDebug = 2;
		$mail -> isSMTP();
		$mail -> Host = 'smtp.gmail.com';
		$mail -> SMTPAuth = true;
		$mail -> Username = 'redress.tic@gmail.com';
		$mail -> Password = $pword;
		$mail -> SMTPSecure = 'tls';
		$mail -> Port = 587;

		$mail -> setFrom('redress.tic@gmail.com', 'ReDress');
		$mail -> addAddress($to);

		$mail -> isHTML(true);
		$mail -> Subject = 'A alguien le ha gustado una de tus prendas';
		$mail -> Body = 'Hola <b>'.$nameOwner.' '.$apeOwner.'!</b></br>'
		. '<br>Queríamos notificarte que <b>'.$nameLiker.' '.$apeLiker.'</b> quiere intercambiar una prenda contigo. Visita la pesta&ntilde;a de notificaciones para más información.</br>'
		. '<br>Muchas gracias por usar nuestra página web! El equipo de ReDress</br>';

		$mail -> send();
		echo 'El mensaje se envio correctamente';

	}
	catch (Exception $e){
		echo 'Hubo un error al enviar mensaje: ', $mail->ErrorInfo;
	}


?>