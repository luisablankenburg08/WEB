<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        $planetas = ["GJ 3378b" => "Rochoso", " LHS 1140" => "Gasoso", "HB5" => "Gasoso", "BluePlanet" => "Rochoso", "CBT 505" => "Rohoso"];


        foreach($planetas as $planeta => $tipo) {
            echo "Planeta: $planeta <br> Tipo: $tipo <br><br>";

        }

    ?>


</body>
</html>
