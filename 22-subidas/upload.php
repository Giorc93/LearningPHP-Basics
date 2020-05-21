<?php

$archivo = $_FILES['archivos']; 

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/png' || $tipo == 'image/gif'){
    
    if(!is_dir('images')){
        mkdir('images', 0777) or die('No se puede crear el archivo');
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header('Refresh: 3; URL=index.php');
    echo'<h2>Imagen subida correctamente.</h2>';
        
}else{
    header('Refresh: 3; URL=index.php');
    echo '<h1>Sube una imagen con un formato correcto.</h1>';
}