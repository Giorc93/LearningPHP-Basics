<?php

/*Ejercicio 1
 * Crear una sesión que aumente su valor en 1 o disminuya en 1 en función de si
 * el parámetro get counter está a uno o cero.
 */

session_start();

$_SESSION['numero'];

if((isset($_GET['counter']) == true) && (($_GET['counter']) == 1)){
    $_SESSION['numero']++;
    var_dump($_SESSION);
}

if((isset($_GET['counter']) == true) && (($_GET['counter']) == 0)){
    $_SESSION['numero']--;
    var_dump($_SESSION);
}

?>

<h1>El valor de la sesión número es <?=$_SESSION['numero']?></h1><br/>
<a href="ejercicio-1.php?counter=1">Aumentar Valor</a><br/>
<a href="ejercicio-1.php?counter=0">Disminuir Valor</a><br/>

