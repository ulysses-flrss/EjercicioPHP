<?php 

    session_start();

    $codigoEmpleado = $;
    $nombreCompleto;
    $cargoEmpleado;
    $sueldoBase;
    

    //Funciones de Descuentos

    $descuentoISSS = $sueldoBase * 0.030;
    $descuentoAFP = $sueldoBase * 0.0725;
    $descuentoRenta = ($sueldoBase < 526) {
        $descuentoRenta =  "NO PAGAS RENTA";
    } else if ($sueldoBase >= 526) {
        $descuentoRenta = $sueldoBase * 0.10;
    } else {
        $descuentoRenta = "Número Invalido, Porfavor Contacte con su Empresa"
    };
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

        <tr>
            
        </tr>
    </table>"
?>