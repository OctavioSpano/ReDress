<?php
session_start();
$tipoprenda = filter_input(INPUT_POST, 'prenda', FILTER_SANITIZE_STRING);
$talles = filter_input(INPUT_POST, 'talles', FILTER_SANITIZE_STRING);
$desc = $_POST ['desc'];
$color = $_POST['color'];
if (isset($_POST['chbxUsado'])){
  $usado = "S";
}  
else{
  $usado = "N";
}

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");

$sql ="INSERT INTO prendas (IDUsuario, Descripcion, Talle, TipoPrenda, Usado) VALUES (".$_SESSION['idu'].",'".$desc."','".$talles."','".$tipoprenda."','".$usado."')"; 
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
        header("location:index.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}

/*function resize_image($file, $max_resolution){

 if(file_exists($file)){

    $original_image = imagecreatefromjpeg($file);

//resolution

    $original_width = imagesx($original_image); 

    $original_height = imagesy($original_image);

//try width first

    $ratio = $max_resolution / $original_width; 

    $new_width= $max_resolution;

    $new_height = $original_height * $ratio;

    //if that didn't work

    if ($new_height > $max_resolution) { 

    $ratio= $max_resolution / $original_height;

    $new_height = $max_resolution;
    $new_width = $original_width * $ratio;

    }

    if($original_image){

    $new_image = imagecreatetruecolor($new_width, $new_height);

    Imagecopyresampled($new_image,$original_image,0,0,0,0,$new_width,$new_height, $original_width, $original_height)

    Imagejpeg($new_image,$file,90);

    }
}

if(isset($_FILES['uploadfile'])){

move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name']);

$file = $_FILES['image']['name'];

resize_image($file, "200");

*/
?>
