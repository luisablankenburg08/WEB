<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $galaxias = ["Grande Nuvem de Magalhães" => 160000, "Andrômeda (M31)" => 2500000, "Galáxia do Triângulo (M33)" => 2700000];

        foreach($galaxias as $galaxia => $distancia) {
            $distancia = number_format($distancia, 0, '', '.');
            echo "Galáxia: $galaxia <br> Distância (em anos-luz): $distancia <br><br>";

        }
    ?>
</body>
</html>
