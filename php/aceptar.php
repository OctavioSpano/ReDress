<?php

$idpend = $_REQUEST['ID'];

    $con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
    $consulta = "SELECT * from pendientes where ID = '$idpend'";
    $resultado=mysqli_query($con, $consulta);

    $row = $resultado -> fetch_assoc();
    $idowner = $row['IDOwner'];
    $iduser = $row['IDUsuario'];
    $idpubli = $row['IDPublicacion'];


    $consulta2 = "SELECT * from usuarios WHERE IDUsuario = '$idowner'";
    $resultado2=mysqli_query($con, $consulta2);

    $infoOwner = $resultado2 -> fetch_assoc();

    $consulta3 = "SELECT * from usuarios WHERE IDUsuario = '$iduser'";
    $resultado3=mysqli_query($con, $consulta3);

    $infoUser = $resultado3 -> fetch_assoc();

    $consulta4 = "SELECT * from prendas WHERE IDPublicacion = '$idpubli'";
    $resultado4=mysqli_query($con, $consulta4);

    $infoPrenda = $resultado4 -> fetch_assoc();

    $to = $infoUser['Mail'];
    $mailOwner = $infoOwner['Mail'];

    $telOwner = $infoOwner['Telefono'];
    $nameOwner = $infoOwner['Nombre'];
    $apeOwner = $infoOwner['Apellido'];
    $pword = "obyhwpzprnuhbclq";

    $descprenda = $infoPrenda['Descripcion'];
    $tipoprenda = $infoPrenda['TipoPrenda'];

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
            $mail -> Password = $pword;
            $mail -> SMTPSecure = 'tls';
            $mail -> Port = 587;

            $mail -> setFrom('redress.tic@gmail.com', 'ReDress');
            $mail -> addAddress($to);

            $mail -> isHTML(true);
            $mail -> Subject = 'Felicidades! Han aceptado tu solicitud de intercambio.';
            $mail -> Body = 'Hola <b>'.$nameLiker.' '.$apeLiker.'!</b></br>'
            . '<br>Queríamos notificarte que <b>'.$nameOwner.' '.$apeOwner.'</b> aceptó cambiar una prenda ("<b><em>'.$descprenda.'</em></b>") contigo. Puedes ponerte en contacto a través de su numero de telefono: <b>'.$telOwner.'</b> o de su Mail: <b>'.$mailOwner.'</b>.</br>'
            . '<br>Muchas gracias por usar nuestra página web! El equipo de ReDress</br>';

            $mail -> send();
            echo 'El mensaje se envio correctamente';

        }
        catch (Exception $e){
            echo 'Hubo un error al enviar mensaje: ', $mail->ErrorInfo;
        }




?>