<?php 
    session_start();
    $_SESSION['id'] = array("001", "002", "003", "004", "005", "006", "007", "008", "009", "010", "011", "012", "013", "014", "015");
    $_SESSION['names'] = array ("Juan Antonio Pérez Aguila", "José Miguel Mendoza Portillo", "Daniel Humberto Castillo", "Luis Alonso Gonzalez Gómez", "Kevin Alejandro Granadino Rivas", "Michelle Abigail Mejia Escobar", "Lucas Alberto Moura Juarez", "Daniel Alberto Panameño Moliba", "Karla Marcela Alvarez Flores", "Armando David Quinteros Paredes", "Susana Alejandra Acosta Torres", "José Alexis Zelaya Monterosa", "Luis Felipe Hernandez Henriquez", "Paulo Bruno Dubala Dos Santos", "Judith Carolina Pineda Pineda");
    $_SESSION['cargo'] = array("Empleado/a", "Gerente", "Gerente", "Empleado/a", "Jefe", "Supervisor/a", "Supervisor/a", "Empleado/a", "Jefe", "Empleado/a", "Empleado/a", "Supervisor/a", "Empleado/a", "Jefe", "Gerente");
    $_SESSION['sueldo'] = array (500,1000,900,450,1200, 700, 600, 430, 1350, 480, 400, 800, 500, 1150, 950);



    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    if ($identifier == "contador" && $password == "1234") {
        header("location: contador.php");
    } else {

    for ($i = 0;$i < 16 ;$i++) {
        if ($identifier == $_SESSION['id'][$i] && $password == "1234") {
            header("location: usuario.php");
            $_SESSION['datos'] = array ($_SESSION['id'][$i], $_SESSION['names'][$i], $_SESSION['cargo'][$i] ,$_SESSION['sueldo'][$i]);
            $i = 100;
        } else if ($identifier !== $_SESSION['id'][$i] || $password !== "1234"){
            header("location: index.html");
            echo "INCORRECTO";
        }
    }
    
}







?>