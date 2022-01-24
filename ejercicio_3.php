<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h3>Ejercicio 3</h3>
        <p>Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por teclado.</p>
        <form action="ejercicio_3.php" method="post">
            <p>Cantidad en pesetas (p): 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Convertir" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] / 166.386;
            echo "Cantidad en euros (€): ".round($res,2)."p";
        ?>
    </body>
</html>