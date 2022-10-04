<?php

$idpend = $_REQUEST['ID'];

    $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
    $consulta = "SELECT * from pendientes where ID = ".$idpend."";
    $resultado=mysqli_query($con, $consulta);

    $consulta2 = "SELECT * from usuarios WHERE IDUsuario = ".$resultado['IDOwner']."";
    $infoOwner=mysqli_query($con, $consulta2);

    $consulta3 = "SELECT from usuarios WHERE IDUsuario = ".$resultado['IDUsuario']."";
    $infoUser=mysqli_query($con, $consul3);

    // $mailOwner = "umanskynico@gmail.com";
    // $telOwner = "11 3815-4578";
    // echo $idpend;
    // echo $consulta2;

    // $nameOwner = "Nico";
 	// $apeOwner = "Umansky";

 	// $nameLiker = "Micaela";
 	// $apeLiker = "Umansky";

    $to = $infoUser['Mail'];
    $mailOwner = $infoOwner['Mail'];

    $telOwner = $infoOwner['Telefono'];
    $nameOwner = $infoOwner['Nombre'];
    $apeOwner = $infoOwner['Apellido'];

    $nameLiker = $infoUser['Nombre'];
    $apeLiker = $infoUser['Apellido'];

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
            $mail -> Password = 'password';
            $mail -> SMTPSecure = 'tls';
            $mail -> Port = 587;

            $mail -> setFrom('redress.tic@gmail.com', 'ReDress');
            $mail -> addAddress('redress.tic@gmail.com');

            $mail -> isHTML(true);
            $mail -> Subject = 'Felicidades! Han aceptado tu solicitud de intercambio.';
            $mail -> Body = 'Hola <b>'.$nameLiker.' '.$apeLiker.'!</b></br>'
            . '<br>Queríamos notificarte que <b>'.$nameOwner.' '.$apeOwner.'</b> aceptó cambiar una prenda contigo. Puedes ponerte en contacto a través de su numero de telefono: <b>'.$telOwner.'</b> o de su Mail: <b>'.$mailOwner.'</b>.</br>'
            . '<br>Muchas gracias por usar nuestra página web! El equipo de ReDress</br>';

            $mail -> send();
            echo 'El mensaje se envio correctamente';

        }
        catch (Exception $e){
            echo 'Hubo un error al enviar mensaje: ', $mail->ErrorInfo;
        }




?>