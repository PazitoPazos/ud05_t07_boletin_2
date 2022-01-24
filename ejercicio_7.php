<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h3>Ejercicio 7</h3>
        <p>Escribe un programa que calcule el total de una factura a partir de la base imponible.</p>
        <form action="ejercicio_7.php" method="post">
            <p>Factura: 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] * 1.21;
            echo "El total de la factura es: ".$_REQUEST["num1"]."+"."21%"."=".$res;
        ?>
    </body>
</html>