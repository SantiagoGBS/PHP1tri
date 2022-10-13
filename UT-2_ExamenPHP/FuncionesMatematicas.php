<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body style="text-align: center;">
        <h1>Probando cálculos</h1>
        <p>Los valores de las variables son:</p>
        <p>$num1: <?php echo($_GET["variable1"]) ?></p>
        <p>$num2: <?php echo($_GET["variable2"]) ?></p>
        <p>$num3: <?php echo($_GET["variable3"]) ?></p>

        <table border="1" style="margin: auto">
            <tbody>
                <tr>
                    <td>la media es: <?php echo(($_GET["variable1"] + $_GET["variable2"] + $_GET["variable3"]) / 3) ?></td>
                </tr>
                <tr>
                    <!-- Concateno variables y String con el punto.-->
                    <td><?php echo($_GET["variable1"] . ' elevado a ') . $_GET["variable2"] . ' es ' . pow($_GET["variable1"], $_GET["variable2"]) ?></td>
                </tr>
                <tr>
                    <td>El núm. aleatorio entre <?php echo($_GET["variable2"]) ?> y <?php echo($_GET["variable3"]) ?> es <?php echo rand($_GET["variable2"], $_GET["variable3"]) ?></td> 
                </tr>
            </tbody>
        </table>
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>