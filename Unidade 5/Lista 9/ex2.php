<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        $pontuacoes = [10, 15, 20, 25, 30];
        $soma = 0;
        for ($nivel=1; $nivel <=5; $nivel++) {
            $posicao = $pontuacoes[$nivel - 1];
            echo "Pontuação do Nível $nivel: $posicao<br>";
            $soma += $posicao;

            };
        echo "Soma total: $soma";
    ?>


</body>
</html>
