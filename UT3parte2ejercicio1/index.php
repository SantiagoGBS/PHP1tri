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
        $arr=array();
                for($i=0;$i<10;$i++){
                    for($a=0;$a<1;$a++){
                        $alea=rand(1,30); 
                        //echo($alea." ");
                    }                              
                    $arr[$i]=$alea;
                }
                var_dump($arr)
        ?>
    </body>
</html>
