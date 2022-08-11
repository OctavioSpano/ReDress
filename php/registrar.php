
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
      <div class="center">
          <h1>Registrarse</h1>
          <form method="POST" action="registro.php">
              <div class="txt_field">
                  <input type="text" name="name" id="name"required>
                  <span></span>
                  <label>Nombre</label>
              </div>
              <div class="txt_field">
                  <input type="text" name="apellido" id="apellido" required>
                  <span></span>
                  <label>Apellido</label>
              </div>
              <div class="txt_field">
                  <input type="tel" name="telefono" id="tel" required>
                  <span></span>
                  <label>Telefóno</label>
              </div>
              <div class="txt_field">
                  <input type="email" name="mail" id="email" required>
                  <span></span>
                  <label>Email</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="contra" id="password" required>
                  <span></span>
                  <label>Contrase&ntilde;a</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="confcontra" id="cpassword" required>
                  <span></span>
                  <label>Confirma Contrase&ntilde;a</label>
              </div>
              <input id="boton" type="Submit" value="Aceptar">
              <div class="signup_link">
                  Tenés una cuenta? <a href="login.php">Inicia sesión aquí</a>
              </div>
          </form>
      </div>
  </div>
  </body>
</html>