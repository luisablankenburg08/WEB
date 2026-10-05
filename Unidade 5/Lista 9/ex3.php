<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        $notas = [10.0 => 1, 5.0 => 2, 2.0 => 3, 7.0 => 4, 3.0 => 5];
        $soma = 0;

        foreach($notas as $nota =>  $posicao) {
            echo "Nota $posicao: $nota <br>";
            $soma += $nota;
        }
        $media = $soma / 5;
        echo "A média das notas é $media"
    ?>


</body>
</html>
