<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        $produtos = ["Garrafa de Água" => 2.00, "Biscoitos" => 10.00, "Leite" => 3.50, "Doce de Leite" => 9.50, "Peito de Frango" => 15.00];

        foreach ($produtos as $produto => $preco) {
            $desconto = $preco * 0.2;
            $descontoAplicado = $preco - $desconto;
            echo "Produto: $produto <br> Preço Original: R$$preco <br>Preço com desconto: R$$descontoAplicado<br><br>";
        };

    ?>


</body>
</html>
