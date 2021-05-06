<?php 

    //ID's, Nombres, Cargos, Sueldo

    $_SESSION['id'] = array("001", "002", "003", "004", "005", "006", "007", "008", "009", "010", "011", "012", "013", "014", "015");


    $codigo = $_POST['code'];
    $password = $_POST['password'];
    

    for ($i = 0; $i < 15; $i++) {
        if ($codigo == "contador" && $password == "1234"){
            header("location: contador/contador.php");
        } else 
            if ($codigo == $_SESSION['id'][$i] && $password == "1234") {
                echo "IDENTIFIADOR CORRECTO" . $codigo;
                header("location: Empleado/empleado.php");
                $i = 100;
            } else {
                        header("Location: index.php");
            }
    }

?>