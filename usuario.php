<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario </title>
    <link rel="stylesheet" href="usuario.css">
</head>
<body>
<?php 
    session_start();

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

        </table>"
?>
</body>
</html>
