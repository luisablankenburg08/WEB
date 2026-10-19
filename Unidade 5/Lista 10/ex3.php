<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Digite sua idade:</label>
        <input type="number" id="num1" name="num1" min="0" required>
        <button type="submit">Verificar</button>
    </form>
    <?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    if (isset ($_POST['num1'])) {

        $idade = $_POST['num1'];

        if ($idade >= 18) {
            echo "<br>$idade: você é maior de idade.";
        }
        else {
            echo "<br>$idade: você é menor de idade.";
        }
    }
    
    ?>
</body>
</html>