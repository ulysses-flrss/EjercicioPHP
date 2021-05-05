<?php 

    session_start();

    $codigoEmpleado = $;
    $nombreCompleto;
    $cargoEmpleado;
    $sueldoBase;
    

    //Funciones de Descuentos

    $descuentoISSS = $sueldoBase * 0.030;
    $descuentoAFP = $sueldoBase * 0.0725;
    $descuentoRenta;
    $sueldoLiquido = $sueldoBase - ($descuentoISSS - $descuentoAFP - $descuentoRenta);

?>