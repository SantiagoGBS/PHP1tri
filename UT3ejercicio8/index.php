<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>   
        <table border="1px">
        <?php
        $contador=0;

            echo("<tr>");
            for($a=1;$a<=100;$a++){
                echo("<td>");
                echo($a);
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
