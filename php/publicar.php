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
              <div class="txt_pub">
                  <input type="email" id="email" name="mail" required>
                  <span></span>
                  <label>Nombre de la prenda</label>
              </div>
              <div class="txt_pub">
                  <input type="password" id="password" name="contra" required>
                  <span></span>
                  <label>Descripción</label>
              </div>
              <input id="botonP" class="btnpublicar" type="Submit" value="Publicar">
          </form>
          <div id="divt">
           
        </div>
      </div>
  </div>
  </body>
</html>
