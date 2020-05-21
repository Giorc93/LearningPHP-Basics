<?php


/*
for($i = 0; $i <= 10; $i++){
    
    echo '<h2>Tabla del '.$i.'</h2>';
    echo '<p> <table border = 1>';
    
    for($i2 = 0; $i2 <= 10; $i2++){
        echo '<tr><td>'.$i.' x '.$i2.'</td>';
        echo '<td>'.($i*$i2).'</td></tr>';
    }
            
    echo'</table></p>';
}
*/
 echo '<table border = 1>';
 echo '<tr>';
 for($cb = 1; $cb <= 10; $cb++){
    echo '<th>Tabla del '.$cb.'</th>';
}
echo '<tr>';
echo '<tr>';
for($i = 1; $i <= 10; $i++){
    echo '<td>';
    for($m = 1; $m <= 10; $m++){
        echo $i.' x '.$m.' = '.($i*$m).'<br/>';        
    }
    echo '</td>';
}
echo '</tr>';
echo '</table>';

?>