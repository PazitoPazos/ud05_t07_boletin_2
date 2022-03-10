<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h3>Ejercicio 1</h3>
        <p>Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.</p>
        <form action="ejercicio_1.php" method="post">
            <p>Número 1: 
                <input type="text" name="num1" />
            </p>
            <p>Número 2: 
                <input type="text" name="num2" />
            </p>
            <p>
                <input type="submit" value="Submit" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] * $_REQUEST["num2"];
            echo "Resultado: ".$res;
        ?>
    </body>
</html>