<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="ex6.php" method="POST">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $valor = $_POST['valor'];
        if ($valor >= 100) {
            echo "Você ganhou um cupom de desconto!";
        }
        else {
            echo "Continue comprando para ganhar um cupom de desconto!";
        };

    }
    ?>
        
</body>
</html>
