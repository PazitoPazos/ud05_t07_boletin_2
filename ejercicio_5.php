<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h3>Ejercicio 5</h3>
        <p>Escribe un programa que calcule el área de un rectángulo.</p>
        <form action="ejercicio_5.php" method="post">
            <p>Largo: 
                <input type="text" name="num1" />
            </p>
            <p>Ancho: 
                <input type="text" name="num2" />
            </p>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] * $_REQUEST["num2"];
            echo "El área del rectángulo es: ".$_REQUEST["num1"]."x".$_REQUEST["num2"]."=".$res;
        ?>
    </body>
</html>