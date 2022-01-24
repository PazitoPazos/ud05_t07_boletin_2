<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h3>Ejercicio 4</h3>
        <p>Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.</p>
        <form action="ejercicio_4.php" method="post">
            <p>Número 1: 
                <input type="text" name="num1" />
            </p>
            <p>Número 2: 
                <input type="text" name="num2" />
            </p>
            <select name="oper">
                <option value="sum" selected="selected">Sumar</option>
                <option value="res">Restar</option>
                <option value="mul">Multiplicar</option>
                <option value="div">Dividir</option>
            </select>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
        <?php
            switch ($_REQUEST["oper"]) {
                case "sum":
                    $res=$_REQUEST["num1"] + $_REQUEST["num2"];
                    echo "<p>Resultado: $res</p>";
                    break;
                case "res":
                    $res=$_REQUEST["num1"] - $_REQUEST["num2"];
                    echo "<p>Resultado: $res</p>";
                    break;
                case "mul":
                    $res=$_REQUEST["num1"] * $_REQUEST["num2"];
                    echo "<p>Resultado: $res</p>";
                    break;
                case "div":
                    $res=$_REQUEST["num1"] / $_REQUEST["num2"];
                    echo "<p>Resultado: $res</p>";
                    break;
            }
        ?>
    </body>
</html>