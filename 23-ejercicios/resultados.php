<?php

$email = $_GET['email'];
validar($email);
$correos = array();

function validar($email){
    if((filter_var($email, FILTER_VALIDATE_EMAIL)) != true){
        $error = 'Introduce un E-Mail válido';
        echo $error;
        header ('Refresh: 2; URL=ejercicio2.php?error=1');
        die();
    }else{
        echo '<h2> E-Mail Válido. </h2>';
        $error = 'ok';
        header ('Refresh: 2; URL=ejercicio2.php');
    }
}



?>

<!DOCTYPE HTML>

<html lang="es">
    
    <head>
        <meta charset="UTF-8"/>
        <title>Resultados PHP</title>
    </head>
    <body>
        
        <h1>Direcciones de Correo agregadas: </h1><br>
        <ul>
            <li><?=$email?></li>
        </ul>
        
    </body>
    
</html>



