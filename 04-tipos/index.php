<?php

/*Tipo de datos
Entero (int / integer)= 99
Coma flotante o decimales (float / double)= 3.45
Cadenas (string)= 'Hola yo soy un string'
Booleanos (bool)= true or false
null= No lleva ningún contenido
Arrays (Colección de datos)
Objetos (Conjunto de datos o funciones independientes}

Las variables nunca pueden comenzar con un número, ni poner guiones -, ni signos de operadores
 */

$numero = 100;
$decimal = 27.9;
$string = "Hola soy un texto $numero"; //Con las comillas simples interpreta todo como texto, con las comillas dobles permite concatenar dentro del texto la variable. Este método tarda un poco más
$bool = true;
$nula = null;

echo ($string);

//Debuggear

$mi_nombre[]= 'Gio';
$mi_nombre[]= 'Ramirez';
//var_dump($mi_nombre); // var_dump()Muestra la información acerca de la variable

?>