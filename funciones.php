<?php 

        function datosPersonales() {
            
        return $id = $_SESSION['id'] = $_SESSION['datos'] [0];
        return$name = $_SESSION['name'] = $_SESSION['datos'] [1];
        return $cargo = $_SESSION['cargo'] = $_SESSION['datos'][2];
        return $sueldo = $_SESSION['sueldo'] = $_SESSION['datos'] [3];
        return$descuentoISSS = $_SESSION['descISSS'] = $sueldo * 0.030;
        $descuentoAFP = $_SESSION['descAFP'] = $sueldo * 0.0725;
        $descuentoRenta = $_SESSION['descR']= $sueldo *0.10;
        $sueldoLiquido = $_SESSION['liquido']= $sueldo - $descuentoISSS - $descuentoAFP - $descuentoRenta;
    }

    

?>