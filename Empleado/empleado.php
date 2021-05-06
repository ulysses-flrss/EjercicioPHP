<?php 

    session_start();
    

    $sueldoBase = $_SESSION['datos'][3];
    

    //Funciones de Descuentos

    $descuentoISSS = $sueldoBase * 0.030;
    $descuentoAFP = $sueldoBase * 0.0725;
    //$descuentoRenta;
    $sueldoLiquido = $sueldoBase - ($descuentoISSS - $descuentoAFP);


    echo 
    "<table>
        <tr>
            <th>Código Empleado</th>
            <th>Nombre Completo</th>
            <th>Cargo</th>
            <th>Sueldo Base</th>
            <th>Descuento ISSS</th>
            <th>Descuento AFP</th>
            <th>Descuenta Renta</th>
        </tr>

        <tr>";
        
        foreach ($_SESSION['datos'] as $valor) {
            echo "<td>".$valor."</td>";
        }; 

            "<td>"; echo $descuentoISSS;"</td>
            <td>".$descuentoAFP."</td>";
            //"<td>".$descuentoRenta."</td>
            //;<td>".$sueldoLiquido."</td>
        "</tr>
    </table>";
      
    
?>