<?php

/*BUCLES
Estructura de control que itera o repite la ejecución de un bloque de instrucciiones cuantas veces sea necesario en base a una condición.*/

/*WHILE
Comprueba una condición y ejecuta el bloque de instrucciones cuantas veces sea necesario hasta que la condición se cumpla.

while(condicion){
    ejecuta esto.
 }
 
 */

$numeros = 0;

while($numeros <= 100){
    echo $numeros.', ';
    $numeros++;
}

echo '<hr/>';
/*
if(isset($_GET['numero'])){     // isset() comprueba que el elemento esté definido o exista.
    // Cambiar tipo de dato ejm: 
    $numero = (int)$_GET['numero'];  //Si existe el elemento obtenido por el método GET la variable numero adquiere su valor.
}else{
    $numero = 1;
}
*/

//Tabla de multiplicar del elemento obtenido por GET

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}

$contador = 0;

while ($contador <= 10){
    $numero = (int)$_GET['numero'];
    echo $numero.' x '.$contador.' = '.($numero*$contador).'<br/>';
    $contador++;
}

echo '<hr>';

/*DO WHILE
 El bucle ejecuta el contenido y posteriormente comprueba la condición. El bucle se repite hasta que la condición se cumpla.

do{
    bloque de instrucciones
 }while(condicion);
 */

$edad = 17;
$contador = 0;

do{
    echo 'Tienes accceso al local privado '.$contador.'<br/>';
    $contador++;
}while($edad >= 18 && $contador <= 10);



?>