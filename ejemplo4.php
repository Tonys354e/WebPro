<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operdaores PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Listado de casos a desarrollar  en PHP</h3>
    </header>
    <section>
        <?php
            

            /* $variable = literal
            Entero 10  100  230 -123
            Reales 20.50  0.0052  - 23.635
            Booleanos true  false
            Caracter 'a'  "c"  
            Cadena de caracteres 'Jefe'  "Admisnitrador" 
            */
            /*
            Operadores:
            + suma                  $a = $b + $c
            - resta                 $a = $b - $c
            * multiplicacion        $a = $b * $c
            / division entera       $a = $b / $c
            % resto de la division  $a = $b % $c
            */
            /* o'peradores de cadena de caracteres:
            . punto (sirve para concatenar  caden ade caracteres)
            */
            ?>
            <?php
            $a = 15;
            $cadena = $a . "<br> nota final del curso";
            echo $cadena;    
            printf("<br> la nota final del curso es %.2f",$a)
            ?>
            <?php
            $b = 20;
            $cadena2 = $b ;
            printf("<br>la nota final del curso es %.3f",$b)
        ?>
        
    </section>

</body>
</html>