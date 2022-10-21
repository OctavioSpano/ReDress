<?php
session_start();

$IDPrenda = $_REQUEST['editID'];
// echo $IDPrenda;

$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$consulta = "SELECT * FROM prendas WHERE IDPublicacion = ".$IDPrenda."";
// echo $consulta;
$resultado=mysqli_query($con, $consulta);
$row = $resultado -> fetch_assoc(); 

if ($row['Usado'] == "Si"){
  $usado = "checked";
}
else if($row['Usado'] == "No"){
  $usado = "";
}

switch ($row['TipoPrenda']){
  case "Pantalones": 
    $chPant = "selected";
    $chRem = "";
    $chHoo = "";
    $chRI = "";
    $chZap = "";
    $chCamp = "";
    $chShrt = "";
    break;
    case "Remeras": 
      $chPant = "";
      $chRem = "selected";
      $chHoo = "";
      $chRI = "";
      $chZap = "";
      $chCamp = "";
      $chShrt = "";
      break;
      case "Hoodies": 
        $chPant = "";
        $chRem = "";
        $chHoo = "selected";
        $chRI = "";
        $chZap = "";
        $chCamp = "";
        $chShrt = "";
        break;
        case "Ropa interior": 
          $chPant = "";
          $chRem = "";
          $chHoo = "";
          $chRI = "selected";
          $chZap = "";
          $chCamp = "";
          $chShrt = "";
          break;
          case "Zapatillas": 
            $chPant = "";
            $chRem = "";
            $chHoo = "";
            $chRI = "";
            $chZap = "selected";
            $chCamp = "";
            $chShrt = "";
            break;
            case "Camperas": 
              $chPant = "";
              $chRem = "";
              $chHoo = "";
              $chRI = "";
              $chZap = "";
              $chCamp = "selected";
              $chShrt = "";
              break;
              case "Short/Bermuda": 
                $chPant = "";
                $chRem = "";
                $chHoo = "";
                $chRI = "";
                $chZap = "";
                $chCamp = "";
                $chShrt = "selected";
                break;
            }


switch ($row['Talle']){
  case "XS": 
    $chXS = "selected";
    $chS = "";
    $chM = "";
    $chL = "";
    $chXL = "";
    $chXLL = "";
    break;
    case "S": 
      $chXS = "";
      $chS = "selected";
      $chM = "";
      $chL = "";
      $chXL = "";
      $chXLL = "";
      break;
      case "M": 
        $chXS = "";
        $chS = "";
        $chM = "selected";
        $chL = "";
        $chXL = "";
        $chXLL = "";
        break;
        case "L": 
          $chXS = "";
          $chS = "";
          $chM = "";
          $chL = "selected";
          $chXL = "";
          $chXLL = "";

          break;
          case "XL": 
            $chXS = "";
            $chS = "";
            $chM = "";
            $chL = "";
            $chXL = "selected";
            $chXLL = "";
  
            break;
            case "XLL": 
              $chXS = "";
              $chS = "";
              $chM = "";
              $chL = "";
              $chXL = "";
              $chXLL = "selected";
    
              break;
    }
?>




<!DOCTYPE html>
<html lang='en'>
  <head>
  	<title>ReDress</title>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width' />
    <link rel='stylesheet' href='../css/styles.css' />
    <link rel='icon' href='../imagenes/Logo.png'> 

    <!--<link rel='stylesheet' href='../css/materialize.css' />-->
    <script src='../js/jquery-3.6.0.min.js' type='text/javascript'></script> 
    <!--<script src='../js/materialize.js' type='text/javascript'></script>-->
    <script src='../js/redress.js' type='text/javascript'></script>
  </head>
  <body>
  
<?php

$sal.="<a href='homeScreen.php'>"; 
$sal.=    "<img id='flechaatras' src='../imagenes/flechaatras.png'  >"; 
$sal.=    "</a>"; 
$sal.=    "<form id='frm1' method='POST' action='edicion.php' enctype='multipart/form-data'>";
$sal.= "<div class='container'>";
$sal.="           <h1 class='h1'>Edita tu prenda</h1>";
$sal.="          <div class='tipo_prenda'>";
$sal.="                <label class='lblPrendas'>Tipo de prenda: </label>";
$sal.="                <select name='prenda'>";
$sal.="                <option value='Pantalones' ".$chPant.">Pantalones</option>";
$sal.="                <option value='Remeras'".$chRem.">Remeras</option>";
$sal.="                <option value='Hoodies'".$chHoo.">Hoodies</option>";
$sal.="                <option value='Ropa interior'".$chRI.">Ropa interior</option>";
$sal.="                <option value='Zapatillas'".$chZap.">Zapatillas</option>";
$sal.="                <option value='Camperas'".$chCamp.">Camperas</option>";
$sal.="                <option value='Short/Bermuda'".$chShrt.">Short/Bermuda</option>";
$sal.="              </select>";
$sal.="              </div>";
$sal.="              <div class='lbl_desc'styles='width:100px;height:100px;'>";
$sal.="                  <label for='desc'>Descripción: </label>";
$sal.="                 <textarea class='lbl_desc'name='desc' rows='5' resize placeholder='".$row['Descripcion']."' >".$row['Descripcion']."</textarea>";
$sal.="                  <span></span>";
$sal.="              </div>";
$sal.="              <div class='form-group'>";
$sal.="                <input class='file-input' type='file' name='uploadfile' id='ufile' value='".$row['RutaFoto']."' required accept='image/*' />";
$sal.="                <div id='prew'>";
$sal.="                 <img class='responsive-img' src=".$row['RutaFoto']." width='auto' height='auto'/>";
$sal.="              </div>";
$sal.="            </div>";
$sal.="        <label class='lblUsado'>Usado: </label>";
$sal.="              <input type = 'checkbox' name = 'chbxUsado' class = 'chbxUsado' ".$usado.">";
$sal.="              <div id='".$row['IDPublicacion']."' class='botonE'>";             
$sal.="              <input id='".$row['IDPublicacion']."' name='botonP' class='botonP' type='Submit' value='Publicar'>";
$sal.="              </div>";          
$sal.="              <div class='lista_talle'>";
$sal.="              <label class='lblTalle'>Talle: </label>";
$sal.="                <select name='talles'>";
$sal.="                  <option value='XS'".$chXS.">XS</option>";
$sal.="                  <option value='S'".$chS.">S</option>";
$sal.="                  <option value='M'".$chM.">M</option>";
$sal.="                  <option value='L'".$chL.">L</option>";
$sal.="                  <option value='XL'".$chXL.">XL</option>";
$sal.="                  <option value='XXL'".$chXXL.">XXL</option>";
$sal.="              </select>";
$sal.="              </div>";
$sal.="              <label class='lblColor'>Color: </label>";
$sal.="              <input type='text' value ='".$row['Color']."'placeholder='".$row['Color']."'name='color'>";
$sal.="  </div>";
$sal.="  </form>";
$sal.="  </body>"
$sal.="</html>";

echo $sal;
?>