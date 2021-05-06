<?php 
    session_start();
    //ID's

    $_SESSION['id'] = array("001", "002", "003", "004", "005", "006", "007", "008", "009", "010", "011", "012", "013", "014", "015");


    $codigo = $_POST['code'];
    $password = $_POST['password'];
    

    for ($i = 0; $i < 15; $i++) {
        if ($codigo == "contador" && $password == "1234"){
            header("location: contador/contador.php");
        } else 
            if ($codigo == $_SESSION['id'][$i] && $password == "1234") {
                header("location: Empleado/empleado.php");
                $_SESSION['datos'] = array($_SESSION['id'][$i], $_SESSION['names'][$i], $_SESSION['sueldo'][$i]);
            } else if ($codigo !== $_SESSION['id'] && $password != "1234"){
                        header("Location: index.php");
            }
    }


    //Nombres, Cargos, Sueldo
    $_SESSION['t1'] = array("001","Acosta Torres, Susana Alejandra", "Empleado/a", 400);
    $_SESSION['t2'] = array("002","Alvarez Flores, Karla Marcela", "Jefe", 1350);
    $_SESSION['t3'] = array("003","Castillo, Daniel Humberto","Gerente", 900);
    $_SESSION['t4'] = array("004", "Dybala Dos Santos, Paulo Bruno","Jefe", 1150);
    $_SESSION['t5'] = array("005","Gonzalez Gómez, Luis Alonso","Empleado/a", 450);
    $_SESSION['t6'] = array("006","Granadino Rivas, Kevin Alejandro","Jefe", 1200);
    $_SESSION['t7'] = array("007","Hernadez Henriquez, Luis Felipe",,"Empleado/a", 500);
    $_SESSION['t8'] = array("008","Mejia Escobar, Michelle Abigail","Supervisor", 700);
    $_SESSION['t9'] = array("009","Mendoza Portillo, José Miguel","Gerente", 1000);
    $_SESSION['t10'] = array("010","Moura Juarez, Lucas Alberto","Supervisor", 600);
    $_SESSION['t11'] = array("011","Panameño Molina, Daniel Alberto","Empleado/a", 430);
    $_SESSION['t12'] = array("012","Pérez Aguila, Juan Antonio","Empleado/a", 500);
    $_SESSION['t13'] = array("013","Pineda Pineda, Judith Carolina","Gerente", 950);
    $_SESSION['t14'] = array("014","Quintero Paredes, Armando David","Empleado/a", 480);
    $_SESSION['t15'] = array("015","Zelaya Monterosa, José Alexis","Supervisor", 800);

?>