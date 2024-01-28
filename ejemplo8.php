<?php
/** 
 * estructura repetitivas
 * operadores de incremento y decremento 
 * ++$variable  incrementa el valor de la variable en uno antes de evaluar la varibale
 * $variable++  incrementa el valor de la variable en una, evalua y luego incrementa  la varibale 
 * --$variable  disminuye el valor de la variable en uno antes de evaluar la varibale
 * $variable--  disminuye el valor de la variable en una, evalua y luego disminuye  la varibale 
 * * Operadore complejos 
 * +=       un operador de amento y acumulacion
 * -=       un operador de disminucion y acumulacion
 * *=       un operasor que acumule valores en productos
 * /=       un operador que acumule divisiones  
 * * contadores
 * $contador = $contador + 1; // $contador++
 * * acumulador
 * $acumulador =$acumulador + $valor; // $acumulador += $valor
 * 
 * ** ESTRUCTURA DE REPETICION WHILE 
 * while (condicion ){
 * instrucciones a repetir;
 * }
 * * */ 
/*$i = 1;
while ($i <= 10) {
    echo $i. "<br>";
    $i++; 
}*/

/*$n =20;
$i =1;
while ($i <=$n){
    if($i % 2 == 0){
        echo $i."<br>";
    }
    $i++;
}*/


/*
$n=20;
$i=1;
$num = 1;
$den = 5;
while ($i <= $n){
    if ($i % 2 != 0){
        echo $num."/".$den."<br>";

    }else{
    echo "-".$num. "/".$den."<br>";
    }
    $num =+1; 
    $den+=5;
    $i++;

} 
**ESTRUCTURA REPETITIVA FOR
* for (inicializacion; condicion;incremento) */
/*for ($i=1; $i<=10 ; $i++) { 
    echo $i."<br>";
} /*
/**
 * ANIDACION DE ESTRUCTURAS REPRTITIVAS
 */
/*$n =10;
$i=1;
while ($i <=$n){
    $j=1;
    while ($j <= $i){
        
        echo $i;
            $j++;
    }
        echo"<br>";
        $i++;
    }*/
    //mostrar en pantalla todos los numeros pares comprendidos entre 1 y 1000
    // en filas de 5 numeros , 10 numeros y 15 numeros 

$n=1000;
$i=1;
$num=1
while ($i <= $n){
   if ($i % 2 != 0){
   echo $num.","."<br>";
   $i+1;
   }
  
   }
   
   
    
    



?>