<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="Perfil.css">
</head>

<body>
    <center>
    <br><br><br>
    <form action="Empleado/empleado.php" method = "get">
      <label for="Correo">Ingrese Su codigo:</label>
      <br><br>
      <input type="text" name="Usuario" id="usuario" placeholder="Ejemplo: B1" required>
      <br><br>
      <label for="Contraseña">Ingrese Su Contraseña:</label>
      <br><br>
      <input type="password" name="Contraseña" id="Contraseña" placeholder="" required>
      <input type="submit" value="Iniciar Sesion" class="enviar">
    </form>
    <a href="login Contador.php">Inicia Sesión como Contador</a> <!-- si se te ocurre algo mejor, lo pones -->
    
  </center> 

  <?php 
  
    $_SESSION['Usuario'] = array($);

  ?>

</body>
</html>
