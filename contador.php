<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/usuario.css">
</head>
<body>
    

<?php

    session_start();
    echo "
    <table class = 'org'>

    <tr>
        <th>Código Empleado</th>
        <th>Nombre Completo</th>
        <th>Cargo</th>
        <th>Sueldo Base</th>
    </tr>";
   
    for ($i=0;$i<15;$i++) {
    echo "<tr>
        <td>".$_SESSION['ids'][$i]."</td>
        <td>".$_SESSION['names'][$i]."</td>
        <td>".$_SESSION['cargos'][$i]."</td>
        <td> $".$_SESSION['sueldos'][$i]."</td>
    </tr>";
    }

echo "</table>

<div class = 'cerrarSesion'>
<a id = 'cierre' href = cerrarSesion.php><button id = 'cierreB'>Cerrar Sesión</button></a>
</div>"
;


?>

</body>
</html>