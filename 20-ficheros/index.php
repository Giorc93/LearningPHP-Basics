<?php

/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");     //Permisos "r" permite leer, permisos "a+" Permite leer y escribir. Revisar documentacion de permisos

//Leer archivo
while(!feof($archivo)){         //feof comprueba si el puntero está al final de el archivo.
    $contenido = fgets($archivo);   //fgets obtiene el valor de la linea que se recorre.
    echo $contenido.'<br>';
}
//Escribir un archivo

fwrite($archivo, 'Hola soy un texto desde PHP <br/>');

//Cerrar archivo
fclose($archivo);

*/

/*Copiar
copy('fichero_texto.txt', 'fichero_copiado.txt')or die('Error al copiar'); */

/*Renombrar
 rename('fichero_copiado.txt','archiviejo_copadp.txt'); */

/*Borrar
unlink('archiviejo_copadp.txt') or die('Error al eliminar');*/

/*Comprobar si existe el archivo*/
if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe';
}else{
    echo 'El archivo no existe';
}