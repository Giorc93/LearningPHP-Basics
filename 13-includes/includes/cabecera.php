<!DOCTYPE HTML>

<html>
    <head>
        <title>Includes en PHP</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        $nombre = 'Gio';    //Esta variable estará disponible en las páginas en las que se ha incrustado la página cabecera.php y hará parte del código de ahí en adelante.
        ?>
        <div class="cabecera">
            <h1>Includes en PHP 7</h1>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobreMi">Sobre Mi</a></li>
                <li><a href="https://google.com.co">Google</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>