
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Ejercicio 2 Notas Curso con Número Aleatorio</title>
    </head>
    <body>
        <?php
        //Podria haberlo hecho con un IF pero queria probar el funcionamiento del swtich en php
        $NotaCurso = rand(1, 10);
        switch ($NotaCurso) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                $calificacion = "Insuficiente";
                break;
            case 5:
                $calificacion = "Suficiente";
                break;
            case 6:
                $calificacion = "Bien";
                break;
            case 7:
            case 8:
                $calificacion = "Notable";
                break;
            case 9:
            case 10:
                $calificacion = "Sobresaliente";
                break;
            default:
                echo("Error");
                break;
        }
        echo($calificacion);
        //echo($NotaCurso); esto es para comprobar que la calificacion va acorde a la nota del curso. 
        ?>

    </body>
</html>