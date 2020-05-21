<?php

//Operadores aritmeticos

$numero1 = 65;
$numero2 = 33;

echo 'Suma = '.($numero1+$numero2).'<br/>';
echo 'Resta = '.($numero1-$numero2).'<br/>';
echo 'Multiplicación = '.($numero1*$numero2).'<br/>';
echo 'Divisón = '.($numero1/$numero2).'<br/>';
echo 'Modulo = '.($numero1%$numero2).'<br/>';

//Operadores de incremento o decremento

$year = 2020;

echo '<h1>'.$year.'</h1>';
    //Pre-Incremento
++$year;
echo '<h1>'.$year.'</h1>';
    //Decremento
$year--;
echo '<h1>'.$year.'</h1>';

    //Operadores de asignación

$edad = 55;

echo '<h2>'.$edad.'</h2>';

//$edad + 5. Se puede utilizar con cualquier operadore aritmetico

echo '<h2>'.($edad+=5).'</h2>';

?>

