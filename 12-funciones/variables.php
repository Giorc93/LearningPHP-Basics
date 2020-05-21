<?php

/*Variables Globales
 * Son aquellas que se definen fuera de una función y están disponibles para su uso dentro y fuera de las funciones.
 * Variables Locales
 * Son las que se definen dentro de una función y no pueden ser usadas fuera de la función. A menos que se haga un return con la variable.
 */

//Variable Global

$year = 2020;

function hola_mundo(){
    global $year;           //Se debe utilizar el comando globlal $variable en la función para poder acceder al contenido en ella.
    echo '<h2>'.$year.'</h2>';
    
    $year2 = 2019;
    echo $year2;
}

echo $year;
echo hola_mundo();

//Funciones en variables

function buenos_dias(){
    return 'Hola buenos dias';
}

function buenas_tardes(){
    return 'Ey ¿Que tal?';
}

function buenas_noches(){
    return 'Buenas noches, descansa';
}

echo '<hr>';

$horario = 'buenas_noches';
echo $horario();

?>

