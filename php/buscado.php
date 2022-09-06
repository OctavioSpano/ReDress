<?php


$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");
$buscar = $_POST['barrabusqueda'];
//echo $buscar;


/*$consulta= "SELECT * FROM prendas where TipoPrenda like '%".$buscar."%'";
$res=mysqli_query($con, $consulta);

//echo $consulta;
/*$sal="";
		if($res->num_rows > 0){
			while($data = $res->fetch_assoc()){
	        	$sal.="<label>".$data['Descripcion']."</label><BR>";
	        	$consulta2 = "SELECT * FROM usuarios WHERE IDUsuario = ". $data['IDUsuario']."";
				$resultado=mysqli_query($con, $consulta2);
				$res2=$resultado->fetch_array();
           
	        	$sal .= "<label> Publicado por: ".$res2['Nombre']." ". $res2['Apellido']."</label><BR>";
	        	$sal.= "<img src = ".$data['RutaFoto'].">";		
	        	
	        }
	    }else{
	        
	    }
    //retorno los datos en formato JSON
    echo $sal;*/
	
	$con->close();

include ("encabezado.php")

?>

<a>
  <img id="rectangulo"src="../imagenes/Rectangulo.png">
</a>

<div class="wrapper">
  <div class="container">
    <div class="top"></div>
    <div class="bottom">
      <div class="left">
        <div class="details">
          <h1>VR Gaming</h1>
          <p style="font-size: 20px;">25000/-</p>
        </div>
        <div class="buy"><i class="material-icons">add_shopping_cart</i></div>
      </div>
      <div class="right">
        <div class="done"><i class="material-icons">done</i></div>
        <div class="details">
          <h1 style="font-size: 20px;">VR Gaming</h1>
          <p >Added to your cart</p>
        </div>
        <div class="remove"><i class="material-icons">clear</i></div>
      </div>
    </div>
  </div>
  <div class="inside">
    <div class="icon"><i class="material-icons">info_outline</i></div>
    <div class="contents">
      <table>
        <tr>
          <th>Width</th>
          <th>Height</th>
        </tr>
        <tr>
          <td>3000mm</td>
          <td>4000mm</td>
        </tr>
        <tr>
          <th>Something</th>
          <th>Something</th>
        </tr>
        <tr>
          <td>200mm</td>
          <td>200mm</td>
        </tr>
        <tr>
          <th>Something</th>
          <th>Something</th>
        </tr>
        <tr>
          <td>200mm</td>
          <td>200mm</td>
        </tr>
        <tr>
          <th>Something</th>
          <th>Something</th>
        </tr>
        <tr>
          <td>200mm</td>
          <td>200mm</td>
        </tr>
      </table>
    </div>
  </div>
</div>

  <script src='../js/jquery-3.6.0.min'></script><script  src="../js/cards.js"></script>
