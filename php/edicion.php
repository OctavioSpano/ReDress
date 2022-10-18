<?php
session_start();
$idEdicion = $_REQUEST['idEdicion'];
echo $idEdicion;
$tipoprenda = filter_input(INPUT_POST, 'prenda', FILTER_SANITIZE_STRING);
$talles = filter_input(INPUT_POST, 'talles', FILTER_SANITIZE_STRING);
$desc = $_POST ['desc'];
$color = $_POST['color'];
if (isset($_POST['chbxUsado'])){
  $usado = "Si";
}  
else{
  $usado = "No";
}

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$sql = "UPDATE prendas set Disponible = 1 WHERE IDPublicacion = ".$idEdicion."";
// echo $sql2;
mysqli_query($con, $sql);

//guarda foto en carpeta y en la base de datos
if (isset($_POST['botonP'])) {
  $sql2 ="INSERT INTO prendas (IDUsuario, Descripcion, Talle, TipoPrenda, Usado, Color) VALUES (".$_SESSION['idu'].",'".$desc."','".$talles."','".$tipoprenda."','".$usado."','".$color."')"; 
  $resultado=mysqli_query($con, $sql2);
  $lastid = mysqli_insert_id($con);


    $filename = $_FILES["uploadfile"]["name"];
    $ext=explode(".", $filename);
        $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image/".$lastid.".".$ext[1];
    // Get all the submitted data from the form
    $sql3 = "UPDATE prendas set RutaFoto='".$folder."' where IDPublicacion=".$lastid."";
    mysqli_query($con, $sql3);
   
    $sql4 = "UPDATE pendientes set IDPublicacion = '".$lastid."' where IDPublicacion = ".$idEdicion."";
    mysqli_query($con, $sql4);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        // $sql2 = "DELETE FROM Prendas Where IDPublicacion = ";
        
        header("location:homeScreen.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
