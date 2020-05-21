<?php

/*FOR
 * for(crear contador, condicón, incremento contador){
 * ejecuta el bloque
 * }
 */

echo 'TABLAS DE MULTIPLICAR <br/>';

for($numeroT = 1; $numeroT <= 10; $numeroT++){
    echo '<p> Tabla del: '.$numeroT.'<br/>';
    for($multiplo = 1; $multiplo <= 10; $multiplo++){
        echo $numeroT.' x '.$multiplo.' = '.($numeroT*$multiplo).'<br/>';
    }
    echo'</p>';
}

/*BREAK
 *Detienen la ejecución del bucle en caso de que se cumpla una condición.
 */


?>