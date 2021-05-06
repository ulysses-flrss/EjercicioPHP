<?php 

    //ID's

    $_SESSION['id'] = array("001", "002", "003", "004", "005", "006", "007", "008", "009", "010", "011", "012", "013", "014", "015");


    $codigo = $_POST['code'];
    $password = $_POST['password'];
    

    for ($i = 0; $i < 15; $i++) {
        if ($codigo == "contador" && $password == "1234"){
            header("location: contador/contador.php");
        } else 
            if ($codigo == $_SESSION['id'][$i] && $password == "1234") {
                echo "IDENTIFICADOR CORRECTO" . $codigo;
                header("location: Empleado/empleado.php");
                $i = 100;
            } else {
                        header("Location: index.php");
            }
    }

    session_start();

    $_SESSION['datos'] = array(
        array("codem" => "001", "nombre" => "Acosta Torres, Susana Alejandra", "cargos" => "Empleado", "sueldo" => "$400", "descafp" => (400*7.5), "descis" => (400*0.3), "descr" => "No Paga Renta", "sueli" => "$"(400-(400*7.5)-(400*0.3))),
        array("codem" => "002", "nombre" => "Álvarez Flores, Karla Marcela", "cargos" => "Jefe", "sueldo" => "$1350", "descafp" => (1350*7.5), "descis" => 30, "descr" => 123.27, "sueli" => "$"(1350-(1350*7.5)-30-123.27)),
        array("codem" => "003", "nombre" => "Castillo, Daniel Humberto", "cargos" => "Gerente", "sueldo" => "$900", "descafp" => (900*7.5), "descis" => (900*0.3), "descr" => 51.24, "sueli" => "$"(900-(900*7.5)-(900*0.3)-51.24)),
        array("codem" => "004", "nombre" => "Dybala Dos Santos, Paulo Bruno", "cargos" => "Jefe", "sueldo" => "$1150", "descafp" => (1150*7.5), "descis" => 30, "descr" => 87.37, "sueli" => "$"(1150-(1150*7.5)-30-87.37)),
        array("codem" => "005", "nombre" => "González Gómez, Luis Alonso", "cargos" => "", "suelEmpleadodo" => "450", "descafp" => (450*7.5), "descis" => (450*0.3), "descr" => "No Paga Renta", "sueli" => "$"(450-(450*7.5)-(450*0.3))),
        array("codem" => "006", "nombre" => "Granadino Rivas, Kevin Alejandro", "cargos" => "Jefe", "sueldo" => "$1200", "descafp" => (1200*7.5), "descis" => 30, "descr" => 96.35, "sueli" => "$"(1200-(1200*7.5)-30-96.35)),
        array("codem" => "007", "nombre" => "Hernández Henríquez, Luis Felipe", "cargos" => "Empleado", "sueldo" => "$500", "descafp" => (500*7.5), "descis" => (500*0.3), "descr" => "No Paga Renta", "sueli" => "$"(500-(500*7.5)-(500*0.3))),
        array("codem" => "008", "nombre" => "Mejía Escobar, Michelle Abigail", "cargos" => "Supervisor", "sueldo" => "$700", "descafp" => (700*7.5), "descis" => (700*0.3), "descr" => 33.29, "sueli" => "$"(700-(700*7.5)-(700*0.3)-33.29)),
        array("codem" => "009", "nombre" => "Mendoza Portillo, José Miguel", "cargos" => "Gerente", "sueldo" => "$1000", "descafp" => (1000*7.5), "descis" => (1000*0.3), "descr" => 60.45, "sueli" => "$"(1000-(1000*7.5)-(1000*0.3)-60.45)),
        array("codem" => "010", "nombre" => "Moura Juárez, Lucas Alberto", "cargos" => "Supervisor", "sueldo" => "$600", "descafp" => (600*7.5), "descis" => (600*0.3), "descr" => 24.32, "sueli" => "$"(600-(600*7.5)-(600*0.3)-24.32)),
        array("codem" => "011", "nombre" => "Panameño Molina, Daniel Alberto", "cargos" => "Empleado", "sueldo" => "$430", "descafp" => (430*7.5), "descis" => (430*0.3), "descr" => "No Paga Renta", "sueli" => "$"(430-(430*7.5)-(430*0.3))),
        array("codem" => "012", "nombre" => "Pérez Águila, Juan Antonio", "cargos" => "Empleado", "sueldo" => "$500", "descafp" => (500*7.5), "descis" => (500*0.3), "descr" => "No Paga Renta", "sueli" => "$"(500-(500*7.5)-(500*0.3))),
        array("codem" => "013", "nombre" => "Pineda Pineda, Judith Carolina", "cargos" => "Gerente", "sueldo" => "$950", "descafp" => (950*7.5), "descis" => (950*0.3), "descr" => 55.73, "sueli" => "$"(950-(950*7.5)-(950*0.3)-55.73)),
        array("codem" => "014", "nombre" => "Quintero Paredes, Armando David", "cargos" => "Empleado", "sueldo" => "$480", "descafp" => (480*7.5), "descis" => (480*0.3), "descr" => "No Paga Renta", "sueli" => "$"(480-(480*7.5)-(480*0.3))),
        array("codem" => "015", "nombre" => "Zelaya Monterosa, José Alexis", "cargos" => "Supervisor", "sueldo" => "$800", "descafp" => (800*7.5), "descis" => (800*0.3), "descr" => 42.27, "sueli" => "$"(800-(800*7.5)-(800*0.3)-42.27)));

    

/*
    //Nombres, Cargos, Sueldo

    $_SESSION['names'] = array("Acosta Torres, Susana Alejandra", "Álvarez Flores, Karla Marcela", "Castillo, Daniel Humberto", "Dybala Dos Santos, Paulo Bruno", "González Gómez, Luis Alonso", "Granadino Rivas, Kevin Alejandro", "Hernández Henríquez, Luis Felipe", "Mejía Escobar, Michelle Abigaíl", "Mendoza Portillo, José Miguel", "Moura Juárez, Lucas Alberto", "Panameño Molina, Daniel Alberto", "Pérez Águila, Juan Antonio", "Pineda Pineda, Judith Carolina", "Quintero Paredes, Armando David", "Zelaya Monterosa, José Alexis";
);
    $_SESSION['cargos'] = array("Jefe", "Gerente", "Supervisor", "Empleado");   

    $_SESSION['sueldo'] = array(400, 1350, 900, 1150, 450, 1200, 500, 700, 1000, 600, 430, 500, 950, 480, 800);*/
?>