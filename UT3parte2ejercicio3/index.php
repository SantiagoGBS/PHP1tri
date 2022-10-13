<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array Ciudades</title>
    </head>
    <body>
        <?php
        // he añadido espacios en las ciudades para hacerlo mas facil, pero se podria hacer mediante codigo.
        $paises = array(
            array("España", " Almeria", " Talavera", " Murcia"),
            array("Francia", " Marsella", " Paris", " Lyon"),
            array("Cuba", " La habana", " Cienfuegos", " Santiago de Cuba"),
        );
        
        for ($a = 0; $a < 3; $a++) {
            //recorro la primera linea ($a[0])
            for ($b = 0; $b < 4; $b++) {
                //recorro en el indice que marque $a, el valor $b
                if ($b == 0) {
                //si es la primera vez que recorro $b la marco en negrita
                    echo("<b>");
                    echo($paises[$a][$b].":");
                    echo '</b>';
                    $b++;
                }
                //si es menor que 3, le ponemos la ,
                if($b<3){
                  echo($paises[$a][$b].", ");  
                }
                //si no es menor (ultimo valor) no le añadimos nada. 
                echo($paises[$a][$b]);
            }
            //cada vez que hagamos una vuelta a una fila completa añadimos un salto 
            echo("<br>");
        }
        ?>
    </body>
</html>
