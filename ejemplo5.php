<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <header>
    <h3>Manejo de operadores  en PHP</h3>
    
   </header>
   <SECtion>
    <?php
    /**
     * $a = pow(2,5);
     * $b = sqrt(5);
     */
    $trabajador ="antony dany lopez";
    $fechaNacimiento ="29/02/1995";
    $numeroHIjos= 2;
    $sueldo = 950.50;
    $activo = true;
    echo "<br>  Valor de variable". " --> ".gettype($trabajador);
    echo "<br>".$trabajador. "->".gettype($trabajador);
    echo "<br>".$fechaNacimiento . " --> ".gettype($fechaNacimiento);
    echo "<br>".$numeroHIjos . " --> ".gettype($numeroHIjos);
    echo "<br>".$sueldo . " --> ".gettype($sueldo);
    echo "<br>".$activo . " --> ".gettype($activo);
    ?>
   </SECtion> 
   <footer>
    <h6>derechos resrvados por @antony</h6>
   </footer>
</body>
</html>