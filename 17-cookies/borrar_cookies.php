<?php

if(isset($_COOKIE['micookie'])){
    unset ($_COOKIE['micookie']);
    setcookie('micookie','',time()-100); //Caducar la cookie para borrarla. 
}else{
    echo 'La cookie no existe';
}

header('location:ver_cookies.php'); //Redirecciona a la URL ingresada en header('location: URL');
