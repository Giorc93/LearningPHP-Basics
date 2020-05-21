<?php

//$error =  'Faltan valores';

if(empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['edad'])
        || empty($_POST['email']) || empty($_POST['pswd'])){
        
    $error =  'Faltan valores';
    header("Location:index.php?error=$error");
       
}else{
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = intval($_POST['edad']);
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $error = 'ok';
    
    if((is_string($nombre) != true) || (preg_match("/[0-9]+/", $nombre)) == true){
        $error = 'Error en el campo nombre.';
    }
    
    if((is_string($apellidos)) != true || (preg_match("/[0-9]+/", $apellidos)) == true){
        $error = 'Error en el campo apellidos.';
    }
    if((is_int($edad)) != true || (filter_var($edad, FILTER_VALIDATE_INT)) != true){
        $error = 'Error en el campo edad.';
    }
    if((is_string($email)) != true || (filter_var($email, FILTER_VALIDATE_EMAIL)) != true){
        $error = 'Error en el campo e-mail.';
    }
    if((is_string($pswd)) != true || (strlen($pswd)) < 5){
        $error = 'Error en el campo password.';
    }
    
}
if($error != 'ok'){
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Validación de Formularios PHP</title>
    </head>
    <body>
        <?php if($error == 'ok'):?>
        <h1>Datos Validados Correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?>></p>
        <p><?=$pswd?></p>
        <?php endif; ?>
    </body>
</html>
    