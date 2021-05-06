<?php 
    session_start();
    //ID's




    $_SESSION['id'] = array("001", "002", "003", "004", "005", "006", "007", "008", "009", "010", "011", "012", "013", "014", "015");


    $_SESSION['cod'] = ($codigo = $_POST['code']);
    $password = $_POST['password'];
    

    for ($i = 0; $i < 15; $i++) {
        if ($codigo == "contador" && $password == "1234"){
            header("location: contador/contador.php");
        } else 
            if ($codigo == $_SESSION['id'][$i] && $password == "1234") {
                header("location: Empleado/empleado.php");
                $_SESSION['datos'] = array($_SESSION['id'][$i], $_SESSION['names'][$i],$_SESSION['cargos'][$i], $_SESSION['sueldo'][$i]);
            } else if ($codigo !== $_SESSION['id'] && $password != "1234"){
                        header("Location: index.php");
            }
    }


 

    //Nombres, Cargos, Sueldo
    $_SESSION['names'] = array("Acosta Torres, Susana Alejandra", "Alvarez Flores, Karla Marcela", "Castillo, Daniel Humberto", "Dybala Dos Santos, Paulo Bruno", "Gonzalez Gómez, Luis Alonso", "Granadino Rivas, Kevin Alejandro", "Hernadez Henriquez, Luis Felipe", "Mejia Escobar, Michelle Abigail", "Mendoza Portillo, José Miguel", "Moura Juarez, Lucas Alberto", "Panameño Molina, Daniel Alberto", "Pérez Aguila, Juan Antonio", "Pineda Pineda, Judith Carolina", "Quintero Paredes, Armando David", "Zelaya Monterosa, José Alexis");
    
    $_SESSION['cargos'] = array("Empleado/a", "Jefe", "Gerente", "Jefe", "Empleado/a", "Jefe", "Empleado/a", "Supervisor/a", "Gerente", "Supervisor/a", "Empleado/a", "Empleado/a", "Gerente", "Empleado/a", "Supervisor/a");   

    $_SESSION['sueldo'] = array(400, 1350, 900, 1150, 450, 1200, 500, 700, 1000, 600, 430, 500, 950, 480, 800);

?>