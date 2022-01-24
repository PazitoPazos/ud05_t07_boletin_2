<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h3>Ejercicio 2</h3>
        <p>Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se
deberá introducir por teclado.</p>
        <form action="ejercicio_2.php" method="post">
            <p>Cantidad en euros (€): 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Convertir" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] * 166.386;
            echo "Cantidad en pesetas (p): ".round($res,2)."p";
        ?>
    </body>
</html>