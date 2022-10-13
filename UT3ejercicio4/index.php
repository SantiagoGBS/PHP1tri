<?php 
$alea=rand(1,20);
$par=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4 Unidad de Trabajo 3</title>
    </head>
    <body>
        <?php
        for($i=1;$i<$alea;$i++){
            if($i%2==0){
              $par+=$i;
        echo("<br>");
            }
        }

        echo("El numero que ha salido es ".$alea."<br>");
        echo($par);
        ?>
    </body>
</html>
