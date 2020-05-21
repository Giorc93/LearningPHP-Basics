<?php

/*
 * ARRAYS
 * Coleccion de valores con un único nombre almacenados en una matriz
 * a cuyos datos se pueden acceder utilizando un índice numérico o alfanumérico.
 */

$peliculas = array('Batman', 'Superman', 'Spiderman', 'Thor');
$personas = array(
    'nombre' => 'Gio',
    'apellidos' => 'Ramirez',       //Arrays asociativos. Como los valores que se obtienen por los metodos GET y POST
    'web' => 'giorc93@hotmail.com'
);
echo ($personas['nombre']);

//Longitud del array count($array)

//FOR
echo'<ul>';
for($i = 0; $i <(count($peliculas)); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo'</ul>';

//FOR EACH}
echo'<ul>';
foreach ($peliculas as $pelicula) {
    echo '<li>'.$pelicula.'</li>';
}
echo'</ul>';

//Arrays Multidimensionales

$contactos = array(
    array(
        'nombre' => 'Gio',
        'apellidos' => 'Ramirez'
    ),
    array(
        'nombre' => 'Andres',
        'apellidos' => 'Cabarique'
    ),
    array(
        'nombre' => 'Geovanny',
        'apellidos' => 'Gonzales'
    )
);

var_dump($contactos);

echo $contactos[1]['nombre']; //Acceder a valores de los arrays multidimensionales

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}