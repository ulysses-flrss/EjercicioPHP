<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <?php  

      $codigoEmpleado;
      $nombreCompleto;
      $cargoEmpleado;
      $sueldoBase;

      //Funciones de Descuentos

      $descuentoISSS = $sueldoBase * 0.030;
      $descuentoAFP = $sueldoBase * 0.0725;
      if ($sueldoBase > 525) {
        $descuentoRenta = 17
      }
      $sueldoLiquido = $sueldoBase - ($descuentoISSS - $descuentoAFP - $descuentoRenta);


    ?>
  </body>
</html>