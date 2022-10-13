<?php


//--------------------------------PARTE EJERCICIO B
$arraynum = array(
    0,
    0,
    0,
    0,
    0,
);

//Recorro el array y relleno las posiciones con valores aleatorios.
foreach ($arraynum as &$vuelta) {
    $vuelta = rand(0, 9);
}

//Escojo las posiciones aleatorias del array para escoger los numeros que van a ser divididos.
//Lo podia haber hecho de una manera más fácil pero quería hacerlo así a ver cómo me salía. 
for ($index = 0; $index < 2; $index++) {
    $aleatorio = rand(0, 4);
    if ($index == 1) {
        $numero2 = $arraynum[$aleatorio];
    } else {
        $numero1 = $arraynum[$aleatorio];
    }
}

//-----------------------------------PARTE EJERCICIO C

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>| Apartado A |</p>
        <!-- Aquí invoco a la función del apartado A -->
        <?php

//----------------------FUNCION APARTADO A---------------------
        function sumanumeros($valor1, $valor2, $valor3, $valor4, $valor5) {
            echo($valor1 + $valor2 + $valor3 + $valor4 + $valor5);
        }

        sumanumeros(2, 4, 1, 5, 8);

//----------------------FUNCION APARTADO B---------------------

        function dividirnumeros($numero1, $numero2) {
            try {
                $resultado = $numero1 / $numero2;
                echo ("Dividir " . $numero1 . " entre " . $numero2 . " es " . $resultado);
            } catch (DivisionByZeroError $e) {
                echo ("No se puede dividir por 0");
            }

            return $resultado;
        }


        ?>
        <p>| Apartado B |</p>
        <!-- Aquí invoco a la función del apartado B -->
        <?php
        dividirnumeros($numero1, $numero2);
        ?>


        <p>| Apartado C |</p>
                <?php
    $volumencilindro = 0;
    $alturaCilindro = 3;
    M_1_PI;
    $radiobase = 10;
        //----------------------FUNCION APARTADO C--------------------- 
               echo($volumenCilindro=M_1_PI* pow($radiobase, 2)*$alturaCilindro);
        ?>

    </body>
</html>