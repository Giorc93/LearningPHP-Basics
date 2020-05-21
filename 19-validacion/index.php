<!DOCTYPE HTML> 

<html>                          <!--3185846711 - 3128353713-->
    <head>
        <meta charset="UTF-8">
        <title>Validación de Formularios PHP</title>
    </head>
    <body>
        
        <?php if(5>2){
            echo '<h1>Validar Formularios PHP</h1>';
        }
            ?>
        
        <?php
        
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            echo '<strong style="color:red">Ha ocurrido un error: '.$error.'</strong>';
        }
        ?>
        
        <form method="POST" action="procesar_formulario.php">
            
            <p><label for="nombre">Nombre: </label><br>
                <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"></p>
            
            <p><label for="apellidos">Apellidos: </label><br>
                <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"></p>
            
            <p><label for="edad">Edad: </label><br>
                <input type="number" name="edad" required="required" pattern="[0-9]+"></p>
            
            <p><label for="email">E-Mail: </label><br>
            <input type="email" name="email" required="required"></p>
            
            <p><label for="pswd">Password: </label><br>
            <input type="password" name="pswd"required="required"></p>
            
            <p><input type="submit" name="submit"></p>
            
        </form>
    </body>
</html>

<?php

?>