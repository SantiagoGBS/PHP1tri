<?php
//genero el numero aleatorio de frutas entre 7 y 20
$numfrutas= rand(7,20);
$aleafruta= rand(815,827);
$contador=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7 UT3</title>
    </head>
    <body>
        <?php
        echo("Hay ".$numfrutas." frutas <br>");
        
        for($i=0;$i<$numfrutas;$i++){
            for($a=0;$a<1;$a++){
                $frutas= rand(815,827);
                if($aleafruta==$frutas){
                    $contador++;
                }
                echo("&#127".$frutas." ");
            }
        }
        echo("<br> La fruta "."&#127".$aleafruta." ha salido ".$contador." veces");
        ?>
    </body>
</html>
