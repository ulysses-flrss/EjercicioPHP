<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <?php  

      session_start();

      echo "<table>\n";
      echo "<tr><th>Código Empleado</th><th>Nombre Completo</th><th>Cargo</th><th>Sueldo Base</th><th>Descuento AFP</th><th>Descuento ISSS</th><th>Descuento Renta</th><th>Sueldo Líquido</th></tr>";
      foreach ($_SESSION['datos'] as $tabla) {
        $i = 0;
        $i++;
        echo "<tr><td>".$tabla['codem'][$i]."</td>";
        foreach ($_SESSION['datos'] as $tabla) {
          echo "<td>".$tabla['nombre'][$i]."</td>";
          /*foreach ($_SESSION['datos'] as $tabla) {
            echo "<td>".$tabla['cargos']."</td>";*/
            foreach ($_SESSION['datos'] as $tabla) {
              echo "<td>".$tabla['sueldo']."</td>";
              foreach ($_SESSION['datos'] as $tabla) {
                echo "<td>".$tabla['descafp']."</td>";
                foreach ($_SESSION['datos'] as $tabla) {
                  echo "<td>".$tabla['descis']."</td>";
                  foreach ($_SESSION['datos'] as $tabla) {
                    echo "<td>".$tabla['descr']."</td>";
                    /*foreach ($_SESSION['datos'] as $tabla) {
                      echo "<td>".$tabla['sueli'][$i]."</td></tr>";
                    }*/
            /*      }*/
                }
              }
            }
          }

          
        }
        /*
        
        foreach ($_SESSION['datos'] as $tabla) {
          echo "<tr><td>".$tabla['descis']."</td>";
        }
        foreach ($_SESSION['datos'] as $tabla) {
          echo "<tr><td>".$tabla['descr']."</td>";
        }
        /*foreach ($_SESSION['datos'] as $tabla) {
          echo "<tr><td>".$tabla['sueli']."</td>";
        }*/
        echo "</tr>\n";
      }
    ?>
  </body>
</html>