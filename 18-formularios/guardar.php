<?php

if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
    $titulo = $_GET['titulo'];
    $descripcion = $_GET['descripcion'];
    echo 'La pelicula es '.$titulo;
}else{
    echo'No existen los datos';
}