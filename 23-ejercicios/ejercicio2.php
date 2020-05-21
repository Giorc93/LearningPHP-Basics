<?php

/* 
 * Ejercicio 2
 * 1-Una función
 * 2-La función debe validar un e-mail con filter_var
 * 3-Utilizar la función y recoger una variable por GET y validarla
 * 4-Mostrar el resultado
 */
?>

<!DOCTYPE HTML>

<html lang="es">
    
    <head>
    <meta charset="UTF-8"/>
    <title>Ejercicio #2</title>
    </head>
    
    <body>
        <?php
        if((isset($_GET['error'])) == 1):
            echo '<strong style="color:red">Introduce un e-mail válido</strong>';
        endif;
        ?>
        <h1>Ingreso de E-Mail</h1>
        
        <form action="resultados.php" method="GET">
            <label for="email">Introduce E-mail: </label>
            <input type="email" name="email" required="required" placeholder="example@php.com"/>
            <input type="submit">
        </form>
    </body>
    
    
</html>

