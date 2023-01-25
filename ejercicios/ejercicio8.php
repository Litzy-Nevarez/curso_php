<?php
    if($_POST){

        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        if($valorA > $valorB){
            echo "El valor de A es mayor que el valor de B";
        }else{
            echo "El valor de B es mayor que el valor de B";
        }

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
    <form action="ejercicio8.php" method="post">
        <h2>Valores Relacionales</h2>
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