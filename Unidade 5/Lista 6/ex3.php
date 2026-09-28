<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $valor = 10.00;
        $desconto = 5;
        $desc_calculado = ($valor * $desconto)/100;
        $novo_preco = $valor - $desc_calculado;
        echo "O preço original era $valor, com $desconto% aplicado, ficou $novo_preco.";
    ?>
</body>
</html>