<?php
session_start();
$publi = $_REQUEST['IDP'];
$owner = $_REQUEST['IDO'];
$usuario = $_SESSION['idu'];
// if (isset($_SESSION['idu']){

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "INSERT INTO pendientes (IDPublicacion, IDOwner, IDUsuario ) VALUES (".$publi.",".$owner.",".$usuario.")";
echo $consulta;
$resultado=mysqli_query($con, $consulta);
$consul2 = "SELECT from usuarios WHERE IDUsuario = ".$owner."";
$res2($con, $consul2);
$infoOwner=mysqli_query($con, $consul2);
$consul3 = "SELECT from usuarios WHERE IDUsuario = ".$usuario."";
$res3($con, $consul3);
$infoUser=mysqli_query($con, $consul3);

	$to = $res2['Mail'];
    $subject = "A alguien le ha gustado tu prenda";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$message.'<br/>
                    Regards<br/>
                  '.$fromEmail.'
				</div>
			</body>
			</html>';
			
    $result = @mail($to, $subject, $message, $headers);
// }
?>