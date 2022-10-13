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
        $coleccionnumeros=array(7,10,3,4,5,6);
        function calcular_minimo($array) {
            $valorminimo=$array[0];
            for($i=0;$i<count($array);$i++){
                if($array[$i]<$valorminimo){
                    $valorminimo=$array[$i];
                }
            }
            return $valorminimo;
        }        
        echo(calcular_minimo($coleccionnumeros));     
        ?>
    </body>
</html>
