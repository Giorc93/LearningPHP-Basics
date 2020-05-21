<?php

/*
 * CONDICIONALES
 * 
 * IF
 * 
 * if(condición){
 * si se cumple ejecuta esto;
 * }else{
 * se ejecuta si nos e cumple}
 * 
 * OPERADORES DE COMPARACIÓN
 * == Es exactamente igual
 * === Idéntico
 * != Diferente
 * <> Diferente
 * < Menor que
 * >Mayor que
 * !== No idéntico
 * <= Menor igual
 * >= Mayor igual
 * 
 * OPERADORES LÓGICOS
 * 
 * &&, and AND: Y
 * ||, or OR: O
 * ! NOT: NO
 * 
 */


$color = 'verde';

if($color == 'rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}

echo '<hr/>';

$year = 2020;

if($year >= 2019){
    echo 'Es un año mayor a 2019';
}else{
    echo 'Es un año menos a 2019';
}

echo '<hr/>';
//SWITCH

$dia = 2;

switch ($dia){
    case 1:
        echo 'LUNES';
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIERCOLES';
        break;
    
}

echo '<hr/>';

//GOTO      //Establece una marca y hace un salto en el código hasta donde se encuentra la marca puede tener cualquier nombre;

goto salto;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';

salto:
echo 'Me he saltado 4 echos';

?>