<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <h3>Ejercicio 10</h3>
        <p>Realiza un conversor de Mb a Kb.</p>
        <form action="ejercicio_10.php" method="post">
            <p>Cantidad en megabits (Mb): 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Convertir" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] * 1000;
            echo "Cantidad en kilobits (kb): ".round($res,2)."kb";
        ?>
    </body>
</html>