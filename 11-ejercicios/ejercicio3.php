<!DOCTYPE HTML>

<html lang="es">
    
    <head>
        <title>Operaciones</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form method="GET" name="formulario" action="">
            <label for="numero1">Numero 1: </label>
            <input type="number" name="numero1"/>
            <br/>
            <label for="numero2">Numero 2: </label>
            <input type="number" name="numero2"/>
            <br/>
            <input type="submit" value="Calcular"/>
        </form>
    </body>
    
    
    
</html>

<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo $numero1.' + '.$numero2.' = '.($numero1+$numero2).'<br/>';
    echo $numero1.' - '.$numero2.' = '.($numero1-$numero2).'<br/>';
    echo $numero1.' x '.$numero2.' = '.($numero1*$numero2).'<br/>';
    echo $numero1.' / '.$numero2.' = '.($numero1/   $numero2).'<br/>';
    
    for($i = $numero1; $i <= $numero2; $i++){
        echo $i.'<br/>';
    }
}else{
    
}



?>
