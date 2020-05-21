<?php

/*COOKIES
 * 
 *Fichero que se almacena en el ordenador del usuario que visita la web con el 
 * fin de recordar datos o rastrear cierta información o comportamiento del mismo
 * en la web. 
 */

/*Crear Cookies
setcookie($cookie1, 'valor que solo puede ser texto', caducidad, ruta, dominio); //3 ultimos opcionales*/

//Cookie Básica
setcookie('micookie', 'valor de mi galleta');

//Cookie con expiración
setcookie('1year', 'valor de mi cookie de 365 dias', time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las Cookies</a>
<a href="borrar_cookies.php">Borrar las Cookies</a>
