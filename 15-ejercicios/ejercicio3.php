<?php

$var = 'texto de prueba';

$comp = empty($var);

if($comp == true){
    echo 'La variable está vacía o no existe.';
}else{
    echo '<h2>'.(strtoupper($var)).'</h2>';
}