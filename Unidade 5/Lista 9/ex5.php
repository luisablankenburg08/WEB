<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        $produtos = ["Garrafa de Água" => 20, "Biscoitos" => 10, "Leite" => 3, "Doce de Leite" => 2, "Peito de Frango" => 8];

        echo "<h3>Produtos com estoque maior que 4: <br> </h3>";
        foreach ($produtos as $produto => $estoque) {
            if ($estoque > 4) {
                echo "Produto: $produto <br>";
            };
        };

    ?>


</body>
</html>
