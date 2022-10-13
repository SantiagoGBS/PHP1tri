<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4. Ordenacion de arrays</title>
    </head>
    <body>
        <?php
        $nombres = array(
            "Antonio" => "31",
            "Maria" => "28",
            "Juan" => "29",
            "Pepe" => "27",
        );
        //------------
        asort($nombres);
        echo("Forma ascendente ordenado por valor");
        echo("<br>");
        foreach ($nombres as $clave => $valor) {
            echo("$clave = $valor" . "<br>");
        }
        //------------
        echo("<br>");
        echo("Forma descendente ordenado por valor");
        echo("<br>");
        arsort($nombres);
        foreach ($nombres as $clave => $valor) {
            echo("$clave = $valor" . "<br>");
        }
        //------------
        echo("<br>");
        echo("Forma descendente ordenado por clave");
        echo("<br>");
        ksort($nombres);
        foreach ($nombres as $clave => $valor) {
            echo("$clave = $valor" . "<br>");
        }
        //------------
        echo("<br>");
        echo("Forma ascendente ordenado por clave");
        echo("<br>");
        krsort($nombres);
        foreach ($nombres as $clave => $valor) {
            echo("$clave = $valor" . "<br>");
        }
        ?>
    </body>
</html>
