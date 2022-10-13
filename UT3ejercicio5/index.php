<?php
    $unicode ="&#";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio emoticono UT2</title>
    </head>
    <body>
        <p><?php
        for($i=0;$i<5000;$i++){
            echo("El numero ".$i." se corresponde con el caracter "."&#".$i." ");
        }
        
         ?></p>
    </body>
</html>