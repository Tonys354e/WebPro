<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario de empleados</title>
    <link rel="stylesheet" href="../estilo/estilo1.css">
</head>
<body>
    <hea>
        <h2>PAGO SALARIO DE EMPLEADOS</h2>
        <img src="../img/empleados.png" 
        width="500"
        height="150">
    </hea   der>
    <section>
        <form action="caso5.php" method="post">
        <?php 
        error_reporting(0);
        $empleado = $_POST['txtEmpleado'];
        $horas=
        $_POST['txtHoras'];
        $categoria = $_POST ['selCategoria'];

        if ($categoria == 'jefe') {
            $selJefe = 'SELECTED';
        }else {
            $selJefe = "";
        }if ($categoria == 'administrativo'){
            $selAdministrativo = 'SELECTED';
        }else{$selAdministrativo = "";
        }if($categoria == "operario"){
            $selOperario = "SELECTED";
        }else{
            $selOperario ="";


        }if ($categoria == 'practicante'){
            $selPracticante = 'SELECTED';
        }else {
            $selPracticante = "";
        }
        ?>
        <table 
        
        border="0"
        cellpadding="0"
        cellspacing="0">
        <tr>
            <td
                width="50">Empleado:</td>
            <td>
                <input
                type="text"
                name="txtEmpleado"
                size="30"
                value="
                <?php
                echo $empleado;?>">
            </td>
        </tr>
        <tr>
            <td>Horas:
            </td>
            <td>
                <input type="text" name = "txtHoras"
                size = "30"
                value="<?php echo $horas;?>">
            </td>
        </tr>
        <tr>
            <td>Categoria :</td>
            <td>
                <select name="selCategoria"
                size="1">
 <option value ="jefe" <?php echo $selJefe ?>>Jefe</option> 
 
 <option value="administrativo"<?php echo $selAdministrativo ?>>administrativo</option>

 <option value ="operario" <?php
 echo $selOperario ?>>Operario</option>

<option value ="practicante" <?php echo $selPracticante ?>>Practicante</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit"
                value="calcular"
                name= "btnCalcular">
            </td>
                <td>
                <input type="reset" value="Limpiar" name="btnLimpiar">
            </td>
        </tr>
        <?php
        if ($categoria =='jefe'){
            $pagoHora = 50;
        } elseif ($categoria == 'administrativo'){
            $pagoHora = 30;
        } elseif ($categoria == 'operario'){
            $pagoHora = 15;
        } elseif ($categoria == 'practicante'){
            $pagoHora=5;
        }
        $sueldoBruto = $pagoHora*$horas;
        ?>
        <tr>
            <td>
                Empleado:
            </td>
            <td>
                <?php
                echo $empleado;?>

            </td>
        </tr>
        <tr>
            <td>
                Horas_trabajadas: 
            </td>
            <td>
                <?php
                echo $horas;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Cargo:
            </td>
            <td>
                <?php
                echo $categoria;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Sueldo a pagar:
            </td>
            <td>
                <?php
                echo $sueldoBruto
                ?>
            </td>
        </tr>   
</table>
</form>
    </section>
    <footer>
        <h6>TODOS LOS DERECHOS RESERVADO @ANTONY</h6>
    </footer>
    <script> 
        elementosInput.forEach(function (elemento){
            elemento.value='';
        });
    
    </script>
</body>
</html>