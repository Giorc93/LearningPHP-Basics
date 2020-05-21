<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP</title>
    </head>
    <body>
        <form method="POST" action="recibir.php"> <!-- POST Y GET Funcionan igual, pero el método POST no exhibe la información a través de la URL lo que lo hace más seguro.
            <p>
                <label for="nombres">Nombres: </label>
                <input type="text" name="nombres" />
            </p>
            <p>
                <label for="apellidos">Apellidos: </label>
                <input type="text" name="apellidos" />
            </p>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>

<?php


