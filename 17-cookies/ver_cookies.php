<?php

//Para mostrar el valor de las cookies se usa $_COOKIE, variable global, array asociativo.

 if(isset($_COOKIE['1year'])){
     echo '<h2>Cookie: '.$_COOKIE['1year'].'</h2>';
 }else{
     echo 'La Cookie no existe';
 }
?>

 <a href="borrar_cookies.php">Borrar las Cookies</a>
 <a href="ver_cookies.php">Ver las Cookies</a>

         