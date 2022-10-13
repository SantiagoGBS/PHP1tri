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
        <table border="1px">
        <?php
        $contador=0;
        $valor=0;
            echo("<tr>");
            for($a=1;$a<=100;$a++){
                        $alea= rand(1,5);
                echo("<td>");
                //he estado investigando y parece que con la funcion array_rad se podria hacer de una manera mas facil y rapida pero aun no lo hemos dado
                switch ($alea) {
                    case 1:
                        $valor=8169;

                        break;
                    case 2:
                        $valor=8168;

                        break;
                    case 3:
                        $valor=7866;

                        break;
                    case 4:
                        $valor=8405;

                        break; 
                    case 5:
                        $valor=9313;

                        break;                    
                }
                echo("&#12".$valor);
                echo("</td>");
            $contador++;
                if($contador==10){
                echo("<tr>");
                echo("</tr>");
                    $contador=0;
                }
            }
            echo("</tr>");

        ?>
            </table>
    </body>
</html>
