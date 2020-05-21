<?php
 require_once 'accion.php';
 require_once 'aventura.php';
 require_once 'deporte.php';
 
$categorias = array(
    'accion' => $accion,
    'aventura' => $aventura,
    'deporte' => $deporte
);

//var_dump($categorias);

echo '<table border = 1><tr>';

$arrayk = array_keys($categorias);

for($ic = 0; $ic < (count($arrayk)); $ic++){
    echo '<th>'.strtoupper($arrayk[$ic]).'</th>';
}
echo '</tr>';

foreach($categorias as $cat){
    echo'<tr>';
    for($ie = 0; $ie < (count($cat)); $ie++ ){
        echo '<td>'.$cat[$ie].'</td>';
    }
    echo'</tr>';
}