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
        $numeros=array(6,2,8,4,5);
            function calcular_maximo($array) {
                $valor=0;
                for($i=0;$i<count($array);$i++){
                    if($array[$i]>$valor){
                    $valor=$array[$i];
                }
                }
                
                return $valor;
            }
            
            echo(calcular_maximo($numeros));
        ?>
    </body>
</html>
