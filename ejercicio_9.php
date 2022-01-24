<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h3>Ejercicio 9</h3>
        <p>Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1/3πr^2a</p>
        <form action="ejercicio_9.php" method="post">
            <p>Radio: 
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
            $res=(pi() * pow($_REQUEST["num1"],2) * $_REQUEST["num2"])/3;
            echo "El volumen del cono es: ".round($res,2);
        ?>
    </body>
</html>