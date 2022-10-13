<?php
$valor1 = 0;
$valor2 = 2;
$valor3 = 0;
$contador = 5;
//Comparaciones en php
if ($valor1 == $valor2 || $valor1 == $valor3) {
    $contador = 1;
    if ($valor2 == $valor3) {
        $contador = 3;
    }
}
if ($valor1 != $valor2 & $valor2 != $valor3 & $valor3!=$valor1) {
    $contador = 0;
}
if ($valor2 == $valor3) {
    $contador = 1;
    if ($valor1 == $valor3) {
        $contador = 3;
    }
}

 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Ejercicio 3 comparacion numeros positivos</title>
    </head>
    <body>
        <?php
        if ($contador == 0) {
            echo("Los numeros no se repiten ninguna vez");
        }
        if ($contador == 1) {
            echo("Hay dos numeros iguales");
        }
        if ($contador == 3) {
            echo("Hay tres numeros iguales");
        }
        if ($contador == 5) {
            echo("Error en la ejecucion del codigo");
        }        
        ?>
    </body>
</html>

