<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $prueba = array(1, 2, 3, 4);

        function calcular_media($array) {
            $media = 0;
            for ($i = 0; $i < count($array); $i++) {
                $media += $array[$i] / count($array);
            }
            return $media;
        }

        echo(calcular_media($prueba));
        ?>
    </body>
</html>
