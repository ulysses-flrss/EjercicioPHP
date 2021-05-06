<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="Perfil.css">
</head>

<body>
    <center>
    <br><br><br>
    <form action="validacion.php" method = "GET">
      <label for="Correo">Ingrese Su codigo:</label>
      <br><br>
      <input type="text" name="code" id="code" required>
      <br><br>
      <label for="Contraseña">Ingrese Su Contraseña:</label>
      <br><br>
      <input type="password" name="password" id="password" placeholder="" required>
      <input type="submit" value="Iniciar Sesion" class="enviar">
    </form>
  </center> 

 
</body>
</html>
