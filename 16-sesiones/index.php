<?php

/*SESIONES
 * Periodo de tiempo durante el cual el usuario de un página navega en ella
 * sin necesidad de indentificarse cada vez que recarga la página. La sesión
 * estará disponible hasta que el usuario cierre sesión o cierre el navegador.
 * 
 * Almacenar y persistir datos del usuario mientras que navega en un sitio web
 * hasta que ciera sesión o cierra el navegador.
 *  */

//Iniciar la sesión

session_start();        //Inicia la sesión.

//Variable normal
$var_normal = 'Soy una cadena de texto';
//Variable de sesión
$_SESSION['variable_persistente'] = 'Hola soy una sesión activa';

echo $var_normal.'<br/>';
echo $_SESSION['variable_persistente'];