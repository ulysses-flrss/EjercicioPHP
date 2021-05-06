<?php 

    session_start();
    
    $codigoEmpleado = $_SESSION['id'][];
    $nombreCompleto;
    $cargoEmpleado;
    $sueldoBase;
    

    //Funciones de Descuentos

    $descuentoISSS = $sueldoBase * 0.030;
    $descuentoAFP = $sueldoBase * 0.0725;
    $descuentoRenta;
    $sueldoLiquido = $sueldoBase - ($descuentoISSS - $descuentoAFP - $descuentoRenta);


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

            "<td>".$descuentoISSS."</td>
            <td>".$descuentoAFP."</td>";
            //"<td>".$descuentoRenta."</td>
            //;<td>".$sueldoLiquido."</td>
        "</tr>
    </table>";

      
    
?>