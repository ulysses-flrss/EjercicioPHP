<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" type="text/css" href="Perfil.css">
</head>

  <body>
    <center>
      <br><br><br>
      <form action="../PHP/login.php">
        <label for="Correo">Ingrese Su Código: </label>
        <br><br>
        <input type="text" name="Usuario" id="usuario" placeholder="Ejemplo: Contador11" required>
        <br><br>
        <label for="Contraseña">Ingrese Su Contraseña: </label>
        <br><br>
        <input type="password" name="Contraseña" id="Contraseña" placeholder="" required>
        <input type="submit" value="Iniciar Sesion" class="enviar">
      </form>
      <a href="index.php">Inicia Sesión como Usuario</a> <!-- si se te ocurre algo mejor, lo pones -->
    </center>
  </body>
</html>