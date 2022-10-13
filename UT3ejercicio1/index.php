<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Cara o Cruz </title>
    </head>
    <body>
        <h1>Cara o Cruz</h1>
        
        <?php
        $valor = rand(1, 2);
        if ($valor == 1) {
            echo("<img src=./assets/images/cruz.jpg alt=cruz>");
        } else {
            echo("<img src=./assets/images/cara.jpg alt=cara>");
        }
        ?>
    </body>
</html>