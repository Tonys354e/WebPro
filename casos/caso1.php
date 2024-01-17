<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso desarrollado 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>CASA DE CAMBIOS</h3>
    </header>
    <section>
        <form action="caso1.php" method="get">
            <table border="0" cellspacing ="0" cellpading = "0" >
                <tr>
                    <td>Monto en soles:</td>
                    <td>
                        <input type="text" name="txtSoles">
                    </td>
                </tr>
                <tr>
                    <td>Monto en dolares:</td>
                    <td>
                        <input type="text" name="txtDolares">
                    </td>
                </tr>
                <tr>
                    <td>Monto en Euros</td>
                    <td><input type="text" name="txtEuros">
                </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar">
                    </td>
                </tr>
                <?php
                    error_reporting(0);
                    $soles = $_GET['txtSoles'];
                    $dolares = $_GET['txtDolares'];
                    $euros = $_GET['txtEuros'];
                ?>
                <tr>
                    <td>total Soles</td>
                    <td>
                        <?php
                        printf("%.2f",$soles);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>total Dolares</td>
                    <td>
                        <?php
                        define ("DOLAR", 3.71);
                        $DOLAR = $soles / DOLAR;
                        printf("%.2f",$DOLAR)
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>total Euros</td>
                    <td>
                        <?php
                        define("EURO",4.05);
                        $euro = $soles / EURO;
                        printf("%.2f", $euro)
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @antony</h6>
    </footer>
    
</body>
</html>