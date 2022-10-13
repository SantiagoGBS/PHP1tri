<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $elementosenrango = array();

        function inicializar_array($numero_de_elementos, $min, $max) {
            $elementos = array();
            for ($a = 0; $a < $numero_de_elementos; $a++) {
                $elementos[] = $random = rand($min, $max);
            }
            return($elementos);
        }
        $variableinicializar=inicializar_array(4, 1, 30);
        function imprimirvalor($elementoenrango){
            foreach ($elementoenrango as $value) {
                echo($value."<br>");
            }
        }
        imprimirvalor($variableinicializar);
        
        ?>
    </body>
</html>
