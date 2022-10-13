<?php
    $prueba = "Un Audi TT no es un tetaedro";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3 UT2</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <p>La frase para el conteo es--> <?= $prueba ?></p>
        <p>Queremos contar cuantas veces aparaece la letra "t"</p>
        <p>El número de veces que aparece la letra t es--><?= substr_count($prueba, "t") ?></p>
        <img src="" alt="">
    </body>
</html>