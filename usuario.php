<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario </title>
    <link rel="stylesheet" href="CSS/usuario.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<?php 
    session_start();


    require_once('funciones.php');


    $id = $_SESSION['datos'] [0];
    $name = $_SESSION['datos'] [1];
    $cargo = $_SESSION['datos'][2];
    $sueldo = $_SESSION['datos'] [3];
    $descuentoISSS = $sueldo * 0.030;
    $descuentoAFP = $sueldo * 0.0725;
    $descuentoRenta = $sueldo *0.10;
    $sueldoLiquido = $sueldo - $descuentoISSS - $descuentoAFP - $descuentoRenta;


    echo "<p class = 'welcome'>Bienvenido/a: " . $name . "</p>";


    echo "<table class = 'org'>

            <tr>
                <th>Código Empleado</th>
                <th>Nombre Completo</th>
                <th>Cargo</th>
                <th>Sueldo Base</th>
                <th>Descuento ISSS</th>
                <th>Descuento AFP</th>
                <th>Descuento Renta</th>
                <th>Sueldo Líquido</th>
            </tr>

            <tr>
                <td>".$id."</td>
                <td>".$name."</td>
                <td>".$cargo."</td>
                <td> $".$sueldo."</td>
                <td> $".$descuentoISSS."</td>
                <td> $".$descuentoAFP."</td>
                <td> $".$descuentoRenta."</td>
                <td> $".$sueldoLiquido."</td>
            </tr>

        </table>";

        echo "
            <div class = 'cerrarSesion'>
            <a id = 'cierre' href = cerrarSesion.php><button id = 'cierreB'>Cerrar Sesión</button></a>
        </div>";
?>
</body>
</html>
