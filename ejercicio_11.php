<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h3>Ejercicio 11</h3>
        <p>Realiza un conversor de Kb a Mb.</p>
        <form action="ejercicio_11.php" method="post">
            <p>Cantidad en kilobits (Kb): 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Convertir" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] / 1000;
            echo "Cantidad en megabits (Mb): ".round($res,2)."Mb";
        ?>
    </body>
</html>