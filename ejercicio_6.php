<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <h3>Ejercicio 6</h3>
        <p>Escribe un programa que calcule el área de un triángulo.</p>
        <form action="ejercicio_6.php" method="post">
            <p>Base: 
                <input type="text" name="num1" />
            </p>
            <p>Altura: 
                <input type="text" name="num2" />
            </p>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
        <?php
            $res=($_REQUEST["num1"] * $_REQUEST["num2"])/2;
            echo "El área del triángulo es: "."(".$_REQUEST["num1"]."x".$_REQUEST["num2"].")/2"."=".$res;
        ?>
    </body>
</html>