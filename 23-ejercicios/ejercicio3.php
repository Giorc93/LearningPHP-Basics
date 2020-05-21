<?php

/* 
 * Hacer un formulario con 2 inputs y 4 botones (SUMA, RESTA, DIVIDIR, MULTIPLICAR)
 */

var_dump($_POST['in1']);
var_dump($_POST['in2']);

if((isset($_POST['in1']))&&(isset($_POST['in2']))){
    $result = null;
    
    if((isset($_POST['suma']))==true){
        $result = $_POST['in1'] + $_POST['in2'];
    }
    if((isset($_POST['resta']))==true){
        $result = $_POST['in1'] - $_POST['in2'];
    }
    if((isset($_POST['multi']))==true){
        $result = $_POST['in1'] * $_POST['in2'];
    }
    if((isset($_POST['div']))==true){
        $result = $_POST['in1'] / $_POST['in2'];
    }
}

?>

<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <form action="" method="POST">
            <p><label for="in1">Ingrese primer número: </label>
                <input type="number" name="in1" required="required"/></p>
            <p><label for="in2">Ingrese segundo número: </label>
                <input type="number" name="in2" required="required"/></p>
            <input type="submit" name="suma" value="Sumar"/>
            <input type="submit" name="resta" value="Restar"/>
            <input type="submit" name="multi" value="Multiplicar"/>
            <input type="submit" name="div" value="Dividir"/> 
    </body>
</html>

<?php

if($result != null){
    echo '<h2>El resultado es: '.$result.'</h2>';
}
var_dump($result);