<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Digite um número (de 1 a 8):</label>
        <input type="number" id="num1" name="num1" max="8" min="1" required>
        <button type="submit">Verificar</button>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['num1'])) {

            $numero = $_POST['num1'];
            $planetas = ["Mercúrio" => 1, "Vênus" => 2, "Terra" => 3, "Marte" => 4, "Júpiter" => 5, "Saturno" => 6, "Urano" => 7, "Netuno" => 8];
            foreach ($planetas as $planeta => $posicao) {
                if ($numero == $posicao ) {
                    echo "Planeta: $planeta<br>";
                }

            }
        }
        
    ?>
</body>
</html>