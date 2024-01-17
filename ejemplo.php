<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Fundamentos de programacion web</h3>
    </header>
    <section>
        <?php
        echo "<br>1. Integrar codigo PHP en HTML5";
        echo "<br>2. Pagin estatica versus pagina dinamica";
        echo "<br>3. Manejo de variables en PHP";

        printf("<br>el sueldo basico es: ");

        $sueldobasico = 350;
        printf("el sueldo basico es de : %.2f", $sueldobasico);

        ?>
    </section>
    <footer>
        <h6>derechos reservados </h6>
    </footer>
</body>
</html>