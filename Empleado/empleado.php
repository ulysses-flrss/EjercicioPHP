<?php 

    session_start();
    
    $codigoEmpleado = $_SESSION['id'];
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
            <th>Código de Empleado</th>
            <th>Nombre Completo</th>
            <th>Cargo</th>
            <th>Sueldo Base</th>
            <th>Descuento ISSS</th>
            <th>Descuento AFP</th>
            <th>Descuenta Renta</th>
        </tr>

        <tr>
            <td>".$codigoEmpleado."</td>
            <td>".$nombreCompleto."</td>
            <td>".$cargoEmpleado."</td>
            <td>".$sueldoBase."</td>
            <td>".$descuentoISSS."</td>
            <td>".$descuentoAFP."</td>
            <td>".$descuentoRenta."</td>
            <td>".$sueldoLiquido."</td>
        </tr>
    </table>";
?>