<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charsetS="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">    <!--action hace referencia a la página a la que será redireccionada la información, si no será redireccionada a ninguna página se deja en blanco-->
            
            <label for="nombre">Nombre: </label>
            <p><input type= "text" name="nombre"/></p>                         <!--method hace referencia la metodo para enviar la información-->
            
            <label for="apellido">Apellido: </label>
            <p><input type="text" name="apellido"/></p>                        <!--enctype='multipart/form-data' hace referencia al encriptado de la información enviada.-->
            
            <label for="apellido">Boton: </label>
            <p><input type="button" name="boton" value="Presioname"/></p>
            
            <label for="Sexo">Sexo: </label>
            <p>
                Hombre <input type="checkbox" name="genero" value="Hombre" checked="checked"/>
                Mujer <input type="checkbox" name="genero" value="Mujer"/>
            </p>
            
            <label for="color">Color: </label>
            <p><input type="color" name="color"/></p>
            
            <label for="date">Fecha: </label>
            <p><input type="date" name="date"/></p>
            
            <label for="email">E-Mail: </label>
            <p><input type= "email" name="email"/></p>
            
            <label for="archivo">Archivo: </label>
            <p><input type= "file" name= "archivo" multiple="multiple"/></p>
            
            <label for="pwd">Password: </label>
            <p><input type= "password" name="pwd" /></p>
                        
            <!-- type='hidden'-->
            
            <label for="numero">Numero: </label>
            <p><input type= "number" name="numero"/></p>
            
            <p><label for="continente">Continente: </label>
            
            America <input type= "radio" name="Continente" value="America"/>
            Europa <input type= "radio" name="Continente" value="Europa"/>
            Asia <input type= "radio" name="Continente" value="Asia"/></p>
            
            <label for="web">Pagina WEB: </label>
            <p><input type= "url" name="web"/></p>
            
            <textarea>
                
            </textarea>
            
            <p><label for="select">Peliculas: </label>
            
            <select>
                <option value="Spiderman">Spiderman</option>
                <option value="Superman">Superman</option>
                <option value="Batman">Batman</option>
                <option value="Deadpool">Deadpool</option>
            </select></p>
            
            <p><input type="submit" value="Enviar"/></p>
            
        </form>
    </body>
</html>

<!-- Atributos para input:
    autofocus= 'autofocus' Selecciona el campo indicado tan pronto se carga la página.
    disbled= 'Disabled' Deshabilita el campo.
    maxlength= '5' Establece la cantidad maxima de caracteres aceptados en '5' o el número deseado.
    minlength= '5' Establece la cantidad minima de caracteres aceptados en '5' o el número deseado.
    pattern= '[A-Z]+' Establece el formato permitido en el campo. En este caso sólo acepta letras de la A a la Z en mayúsculas y una cantidad ilimitada de caracteres. Si se desea especificar la cantidad se pone en {}.
    required= 'required' Establece que el campo debe llevar información para poder validar el envio.
<?php

?>
