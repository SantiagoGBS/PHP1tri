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
        $notas=[];
        for($a=0;$a<50;$a++){
            $notas[]=$random= rand(1,10);
        }
        var_dump($notas);
        for($b=0;$b<50;$b++){
            if($notas[$b]<5){
                $notas[$b]="suspenso";
            }
        }
        var_dump($notas);
        ?>
    </body>
</html>
