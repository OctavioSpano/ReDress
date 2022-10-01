<?php
session_start();
if(!isset($_SESSION['idu'])){
   header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <a href="index.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
  <h1 class="h1">Notificaciones</h1>
