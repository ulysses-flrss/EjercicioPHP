<?php 

    session_start();
    
    

    //Funciones de Descuentos

    $descuentoISSS = "$" . $_SESSION['datos'][3] * 0.030;
    $descuentoAFP = "$" .  $_SESSION['datos'][3] * 0.0725;
    //$descuentoRenta;
    //$sueldoLiquido = $_SESSION['datos'][3] - ($descuentoISSS - $descuentoAFP);


    echo 
    "<table>
        <tr>
            <th>Código de Empleado</th>
            <th>Nombre Completo</th>
            <th>Cargo</th>
            <th>Sueldo Base</th>
            <th>Descuento ISSS</th>
            <th>Descuento AFP</th>
            <th>Descuenta Renta</th>
            <th>Sueldo Liquido</th>
        </tr>

        <tr>";
        tabla();
            "<td>".$descuentoISSS."</td>
            <td>".$descuentoAFP."</td>";
            //"<td>".$descuentoRenta."</td>
            //;<td>".$sueldoLiquido."</td>
        "</tr>
    </table>";

    function tabla(){    
        foreach ($_SESSION['datos'] as $valor) {
            echo "<td>".$valor."</td>";
        }
    }
?>