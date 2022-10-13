<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Funciones con Cadena</title>
    </head>
    <body style="text-align: center;">
        <h1>Probando Cadenas</h1>
        <b>La cadena 1 es: <?php echo($_GET["cadena1"]) ?></b>
        <br>
        <b>La cadena 2 es: <?php echo($_GET["cadena2"]) ?></b>
        <p>Concatenación de cadenas: <b><?php echo($_GET["cadena1"] . $_GET["cadena2"]) ?></b></p>
        <!-- Parece que lleva 9 caracteres pero es por que cuenta el espacio también -->
        <p>Los 10 últimos caracteres de $cadena2 son: <b><?php echo(substr($_GET["cadena2"], -10)) ?></b></p>
        <a href="index.php">Volver</a>
    </body>
</html>
