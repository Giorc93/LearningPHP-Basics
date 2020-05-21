<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir Archivos PHP</title>
    </head>
    <body>
        <h1>Subir Archivos con PHP<hr/></h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data"> 
            <input type="file" name="archivos"/>
            <input type="submit" vale="enviar"/>
        </form>
        
        <h1>Listado de Imágenes</h1>
        <?php
            $gestor = opendir('./images');
            if($gestor == true):
                while(($image = readdir($gestor)) != false):
                    if($image != '.' && $image != '..'):
                        echo "<img src='images/$image' width='200px'/><br/>";
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</html>





<?php

