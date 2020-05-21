<!DOCTYPE HTML>

<html lang='es'>
    <head>
    <title>Iprimir por Pantalla - Master PHP</title>
    <meta charset='utf-8'/>
    </head>
    <body>
        <h1>Master en PHP - Gio</h1>
        
        <?='Bienvenido'?> 
        <!--La instrucción < ?= ?> es una abreviatura del echo -->
        <?php
        
        echo '<h3>Listado de Videojuegos: </h3>';
        echo '<ul>'
            .'<li>GTA V</li>'       //En PHP se concatena con . en lugar de + como en JavaScript
            .'<li>CoD</li>'
            .'<li>Pacman</li>'
            .'</ul>';
        echo '<p>Esta es toda la lista de videojuegos.</p>'
                    
        ?>
    </body>
</html>



