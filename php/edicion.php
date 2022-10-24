<?php
session_start();
$idEdicion = $_REQUEST['idEdicion'];
// echo $idEdicion;
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

//guarda foto en carpeta y en la base de datos
if (isset($_POST['botonE'])) {
  if (file_exists($_FILES['uploadfile']['tmp_name']) || is_uploaded_file($_FILES['uploadfile']['tmp_name'])) {
    $sql2 = "UPDATE prendas set Descripcion = '".$desc."', Talle = '".$talles."', TipoPrenda = '".$tipoprenda."', Usado = '".$usado."', Color ='".$color."' WHERE IDPublicacion = ".$idEdicion."";
    $resultado=mysqli_query($con, $sql2);

    // $lastid = mysqli_insert_id($con);
    // echo $_SESSION['idu']. "x". $desc."x".$tipoprenda."x".$color."x".$talles."x".$usado."x".$idEdicion;
    
        $filename = $_FILES["uploadfile"]["name"];
        $ext=explode(".", $filename);
        
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../image/".$idEdicion.".".$ext[1];
        // // Get all the submitted data from the form
        $sql4 = "SELECT RutaFoto from prendas where IDPublicacion = ".$idEdicion."";
        $resultado3 = mysqli_query($con, $sql4);
        $row = $resultado3 -> fetch_assoc();
        
        $sql3 = "UPDATE prendas set RutaFoto='".$folder."' where IDPublicacion=".$idEdicion."";
        mysqli_query($con, $sql3);
      
        // // Now let's move the uploaded image into the folder: image
        
        if (unlink($row['RutaFoto'])) {

          if (move_uploaded_file($tempname, $folder)) {            
            header("location:homeScreen.php");
            } 
            else {
            echo "<h3>  Failed to upload image!</h3>";
            }
        
        } else {
          echo "there was a problem deleting the file";
        }
        
     }
 

  else{
    $sql1 = "UPDATE prendas set Descripcion = '".$desc."', Talle = '".$talles."', TipoPrenda = '".$tipoprenda."', Usado = '".$usado."', Color ='".$color."' WHERE IDPublicacion = ".$idEdicion."";
    $resultado=mysqli_query($con, $sql1);
    header("location:homeScreen.php");
    
  }
}
?>
