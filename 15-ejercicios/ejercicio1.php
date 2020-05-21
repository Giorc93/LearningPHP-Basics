<?php

$numeros = array(23, 45, 76, 34, 89, 12, 6, 67);

//Punto 1

for($i = 0; $i < (count($numeros)); $i++){
    $elm = $i + 1;
    echo 'Elemento número '.$elm.' = '.$numeros[$i].'<br/>';
}
echo '<hr>';

//Punto 2

sort($numeros);
for($i = 0; $i < (count($numeros)); $i++){
    $elm = $i + 1;
    echo 'Elemento número '.$elm.' = '.$numeros[$i].'<br/>';
}
echo '<hr>';

//Punto 3

echo 'Longitud del Array: '.count($numeros).' elementos.';
echo'<hr>';

//Punto 4

$busquedaI = $_GET['numero'];
$busqueda = array_search($busquedaI, $numeros);

if($busqueda == true){
    echo 'El elemento: '.$busquedaI.' se encuentra en la posición: '.$busqueda;
}else{
    echo 'El elemento: '.$busquedaI.' no se encuentra en el array.';
}
?>