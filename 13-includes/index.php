<?php
include_once 'includes/cabecera.php'; //include permite agregar multiples veces el fichero a la página. include_once sólo permite agregar el fichero 1 vez.
?>
        <hr>
        <div>
            <h2>Esta es la página de Inicio</h2>
            <p>Texto de prueba de la página</p>
        </div>
        
        <hr>

<?php
require 'includes/footer.php'; // require no permite ejecutar la página si el fichero no ha sido añexado correctamente. require_once es el más estricto y más recomendable para usar.
?>