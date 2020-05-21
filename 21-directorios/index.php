<?php

if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die ('No se puede crear el directorio');
}else{
    echo 'Ya existe la carpeta';
}

/*Borrar directorio
rmdir('mi_carpeta');*/

/*Leer contenido de la carpeta*/

echo '<h1>Contenido de la Carpeta</h1>';
$gestor = opendir('./mi_carpeta');

if($gestor = opendir('./mi_carpeta')){
    while(false != ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo '<br>'.$archivo;
        }
    }
}