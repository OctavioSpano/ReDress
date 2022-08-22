<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ReDress</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body>
    <a href="index.php" >
    <img id="flechaatras" src="../imagenes/flechaatras.png"  >
    </a>
    <div class="container">
      <div class="center">
          <h1>Iniciar Sesión</h1>
          <form method="POST" action="validar.php">
              <div class="txt_field">
                  <input type="email" id="email" name="mail" required>
                  <span></span>
                  <label>Email</label>
              </div>
              <div class="txt_field">
                  <input type="password" id="password" name="contra" required>
                  <span></span>
                  <label>Contrase&ntilde;a</label>
              </div>
              <input id="botonL" type="Submit" value="Aceptar">
              <div class="signup_link">
                  No tenés una cuenta? <a href="registrar.php">Registrate aquí</a>
              </div>
          </form>
          <div id="divt">
           
        </div>
      </div>
  </div>
  </body>
</html>