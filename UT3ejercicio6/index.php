<?php
$alea=rand(1,20);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for($i=1;$i<10;$i++){
            echo($i."*".$alea."=".$i*$alea."<br>");
        }
        ?>
    </body>
</html>
