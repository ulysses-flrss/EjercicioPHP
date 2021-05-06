<?php 

    //ID's, Nombres, Cargos, Sueldo

    $_SESSION['id'] = array("001", "002", "003", "004", "005", "006", "007", "008", "009", "010", "011", "012", "013", "014", "015");


    $codigo = $_GET['code'];
    $password = $_GET['password'];
    

    for ($i = 0; $i < 15; $i++) {
        if ($codigo)    
            if ($codigo == $_SESSION['id'][$i]) {
                echo "IDENTIFIADOR CORRECTO" . $codigo;
                header("Location: Empleado/empleado.php");
            } else {
                header("Location: index.php");
            }
    }
?>