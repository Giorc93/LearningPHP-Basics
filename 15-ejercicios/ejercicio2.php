<?php

$arrayn = array();

for($i = 1; $i <= 120; $i++){
    $adnum = rand();
    array_push($arrayn, $adnum);
}

echo '<h2>El número de elementos en el array es: '.count($arrayn).'</h2><br>';
$elm = 1;

foreach ($arrayn as $num){
    echo 'Elemento '.$elm.' = '.$num.'<br/>';
    $elm++;
}