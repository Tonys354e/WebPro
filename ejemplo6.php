<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Manejo de constantes</h3>
    </header>
    <section>
        <?php
        /**una constante se define asi */
        define("PI",2.1416);
        define("IGV",0.18);

        $radio = 12;
        $valorVenta = 250.50;
        
        $area = PI * $radio*$radio;
        $impuesto = $valorVenta*IGV;

        echo "<br> El area del circulo con radio $radio es $area";
        echo "<br> El area del circulo con radio $valorVenta es $impuesto ";
        ?>
    </section>
    
</body>
</html>