<?php
    if($_POST){

        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $division=$valorA/$valorB;
        $multi=$valorA*$valorB;

        echo "<br>".$suma;
        echo "<br>".$resta;
        echo "<br>".$division;
        echo "<br>".$multi;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7: Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
        <h2>Operadores aritmeticos</h2>
        <br>
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
        <br>
    </form>
</body>
</html>