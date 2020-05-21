<?php

/*Funciones
 * Conjunto de ordenes agrupados por un nombre concreto.
 * 
 * function nombreFuncion(par, par2, opc){
 *  Bloque de instrucciones;
 * }
 */

$num1 = 23;
$num2 = 34;

function tabla($numero){
    echo '<h2>Tabla de multiplicar del numero '.$numero.'</h2>';
    for($i = 1; $i <= 10; $i++){
        echo $numero.' x '.$i.' = '.($i*$numero).'<br/>';
    }
}
tabla(23);

echo '<hr/>';

//Varios Parámetros

function calculadora ($numero1, $numero2){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    
    echo 'Suma: '.$suma.'<br/>Resta: '.$resta.'<br/>';
    echo '<hr/>';
}

//Parámetros Opcionales

function calculadoraO ($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    
    if($negrita != false){
        echo '<h1>';
    }
    
    echo 'Suma: '.$suma.'<br/>Resta: '.$resta.'<br/>';  //echo puede reemplazarse por $variable_texto .= para ir concantenando lo que se imprimía  y guardarlo en la variable para entregarla en el return $cadena_texto    
    
     if($negrita != false){
        echo '</h1>';
    }
    
    echo '<hr>';
}


calculadoraO(32,43);
calculadoraO(45,33, true);
calculadoraO(22,76);

/*Return
 * Los echos dentro de las funciones no son una buena práctica. Para ello las funciones deben devolver algo a través del return.
 */


function devName($name){
    return 'El nombre es: '.$name;
}
$name = 'Gio';
echo devName($name);