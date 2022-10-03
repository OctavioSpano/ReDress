<?php
session_start();


$publi = $_REQUEST['IDP'];
$owner = $_REQUEST['IDO'];
$usuario = $_SESSION['idu'];

echo $publi;

// $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
// $consulta = "INSERT INTO pendientes (IDPublicacion, IDOwner, IDUsuario ) VALUES ('$publi','$owner','$usuario')";
// echo $consulta;
// $resultado=mysqli_query($con, $consulta);

// $consul2 = "SELECT from usuarios WHERE IDUsuario = '$owner'";
// // $res2($con, $consul2);
// $infoOwner=mysqli_query($con, $consul2);
// $consul3 = "SELECT from usuarios WHERE IDUsuario = '$usuario'";
// // $res3($con, $consul3);
// $infoUser=mysqli_query($con, $consul3);

// // 	$to = $infoOwner['Mail'];
//  	$nameOwner = $infoOwner['Nombre'];
//  	$apeOwner = $infoOwner['Apellido'];

//  	$nameLiker = $infoUser['Nombre'];
//  	$apeLiker = $infoUser['Apellido'];
// 	//  $nameOwner = "Nico";
//  	// $apeOwner = "Umansky";

//  	// $nameLiker = "Micaela";
//  	// $apeLiker = "Umansky";

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require '../PHPMailer/Exception.php';
// require '../PHPMailer/PHPMailer.php';
// require '../PHPMailer/SMTP.php';

//  	$mail = new PHPMailer(true);

// 	try{
// 		$mail -> SMTPDebug = 2;
// 		$mail -> isSMTP();
// 		$mail -> Host = 'smtp.gmail.com';
// 		$mail -> SMTPAuth = true;
// 		$mail -> Username = 'redress.tic@gmail.com';
// 		$mail -> Password = 'mukoxqbbgnrgzhpb';
// 		$mail -> SMTPSecure = 'tls';
// 		$mail -> Port = 587;

// 		$mail -> setFrom('redress.tic@gmail.com', 'ReDress');
// 		$mail -> addAddress('redress.tic@gmail.com');

// 		$mail -> isHTML(true);
// 		$mail -> Subject = 'A alguien le ha gustado una de tus prendas';
// 		$mail -> Body = 'Hola <b>'.$nameOwner.' '.$apeOwner.'!</b></br>'
// 		. '<br>Queríamos notificarte que <b>'.$nameLiker.' '.$apeLiker.'</b> quiere intercambiar una prenda contigo. Visita la pesta&ntilde;a de notificaciones para más información.</br>'
// 		. '<br>Muchas gracias por usar nuestra página web! El equipo de ReDress</br>';

// 		$mail -> send();
// 		echo 'El mensaje se envio correctamente';

// 	}
// 	catch (Exception $e){
// 		echo 'Hubo un error al enviar mensaje: ', $mail->ErrorInfo;
// 	}


?>