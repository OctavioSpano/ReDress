<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body>
  	<div class="container">
      <div class="centerpub">
          <h1>Publicá tu prenda</h1>
          <form method="POST" action="validar.php">
              
              <div>
                <input list="tipo_prenda" id="lista_prendas" name="lista_prendas" placeholder="Tipo de prenda: "/>
                <datalist id="tipo_prenda">
                  <option value="Remera"></option>
                  <option value="Pantalon"></option>
                  <option value="Buzo/Hoodie"></option>
                  <option value="Campera"></option>
                  <option value="Short/Bermuda"></option>
                  <option value="Ropa Interior"></option>
                  <option value="Zapatillas"></option>
                </datalist>
              </div>
              <div class="txt_pub">
                  <input type="password" id="password" name="contra" required>
                  <span></span>
                  <label>Descripción</label>
              </div>
              <input id="botonP" class="txt" type="Submit" value="Publicar">
          </form>
          <div id="divt">
           
        </div>
      </div>
  </div>
  </body>
</html>
