<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <button type="submit">Calcular</button>
    </form>
    <?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset ($_GET['num1']) && isset ($_GET['num2'])) {

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $soma = $num1 + $num2;
        echo "<br>A soma dos números é: $soma";
    }
    
    ?>
</body>
</html>