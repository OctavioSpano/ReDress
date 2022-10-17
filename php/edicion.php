<?php
session_start();
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

$sql ="INSERT INTO prendas (IDUsuario, Descripcion, Talle, TipoPrenda, Usado, Color) VALUES (".$_SESSION['idu'].",'".$desc."','".$talles."','".$tipoprenda."','".$usado."','".$color."')"; 
$resultado=mysqli_query($con, $sql);
$lastid = mysqli_insert_id($con);   
//guarda foto en carpeta y en la base de datos
if (isset($_POST['botonP'])) {
 

    $filename = $_FILES["uploadfile"]["name"];
    $ext=explode(".", $filename);
        $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image/".$lastid.".".$ext[1];
    // Get all the submitted data from the form
    $sql = "UPDATE prendas set RutaFoto='".$folder."' where IDPublicacion=".$lastid."";
    
    // Execute query
    mysqli_query($con, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        // $sql2 = "DELETE FROM Prendas Where IDPublicacion = ";
        
        header("location:homeScreen.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
