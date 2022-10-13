<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $suma=0;
        $media;
        $valor1=0;
        $valor2=0;
        $valor3=0;
        
        $arr=array();
        //parte en la que genero aleatoriamente el array llamado arr
                for($i=0;$i<10;$i++){
                    for($a=0;$a<1;$a++){
                        $alea=rand(1,30); 
                    }                              
                    $arr[$i]=$alea;
                }   
                for($e=0;$e<10;$e++){
                    $valorarray=$arr[$e];
                    $suma+=$valorarray;
                }
                //Aqui he usado la funcion de php round para redondar el valor de la media.  
                echo("La suma es ".$suma." el valor medio es ".round($media=$suma/10)."<br>");
                //ordeno el array con la funcion reservada sort
                $arraycopiado=$arr;
               sort($arraycopiado);
               echo("Los valores minimos son "."$arraycopiado[0]"." "."$arraycopiado[1]"." "."$arraycopiado[2]"."<br>");
               echo("Los valores maximos son "."$arraycopiado[7]"." "."$arraycopiado[8]"." "."$arraycopiado[9]");
               //echo(var_dump($arraycopiado)."<br>");
               unset($arraycopiado[1]);
               //echo(var_dump($arraycopiado));
        ?>
    </body>
</html>
