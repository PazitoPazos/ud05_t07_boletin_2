<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h3>Ejercicio 8</h3>
        <p>Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12 euros por hora.</p>
        <form action="ejercicio_8.php" method="post">
            <p>Horas trabajadas: 
                <input type="text" name="num1" />
            </p>
            <p>
                <input type="submit" value="Calcular" />
            </p>
        </form>
        <?php
            $res=$_REQUEST["num1"] * 12;
            echo "El salario semanal es de: ".$res."€";
        ?>
    </body>
</html>