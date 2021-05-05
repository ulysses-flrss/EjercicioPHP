<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body><center>
<?php 
      <br><br><br>
        <form action="../PHP/login.php">
        <label for="Correo">Ingrese Su codigo:</label>
        <br><br>
        <input type="text" name="Usuario" id="usuario" placeholder="Ejemplo: B1" required>
        <br><br>
        <label for="Contraseña">Ingrese Su Contraseña:</label>
        <br><br>
        <input type="password" name="Contraseña" id="Contraseña" placeholder="" required>
        

        <input type="submit" value="Iniciar Sesion" class="enviar">
    </form>

</body></center>
</html>