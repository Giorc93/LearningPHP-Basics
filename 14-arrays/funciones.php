<?php

$peliculas = array('Batman', 'Superman', 'Spiderman', 'Thor');

/*Ordenar Arrays
 *arsort($arr); Ordena el array por orden alfanumérico.
 * sort($arr); Ordena en orden alfanumérico.
 * 
 * Añadir elementos al Array
 * $arr[]= 'elem'; Añade el elemento elem al array arr.
 * array_push($arr, 'elem'); Añade el elemento elm al array arr.
 * 
 * Eliminar elementos del Array
 * array_pop($arr); Elimina el último elemento del array;
 * unset($arr[pos]); Elimina el elemento en la posición pos del array. 
 * 
 * Seleccionar elementos
 * array_rand($arr); Seleccionar elemento aleatorio del array.Guardar en var
 * 
 * Invertir el array
 * array_reverse($arr); Invierte el orden del array.Guardar en var
 * 
 * Buscar dentro de un Array
 * array_search('elem', $arr); Busca el elemento del array. Guardar en var
 * 
 * Contar elementos del Array
 * count($arr); Contar elementos del array.
 * sizeof($arr); Contar elementos del array.
 */

echo sizeof($peliculas);
?>