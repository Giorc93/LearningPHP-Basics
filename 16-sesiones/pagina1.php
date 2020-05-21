<?php

session_start(); //Se debe ejecutar para acceder a las variables en todas las páginas.

//echo $var_normal;

echo $_SESSION['variable_persistente']; //Variable de sesión. Se habilita en cualquier página del dominio
