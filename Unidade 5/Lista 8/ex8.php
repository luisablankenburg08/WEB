<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 

        for($i = 1; $i <=13; $i++) {
            echo "Número da amostra: $i - ";
            if ($i %2 == 0) {
                echo "Encontrou-se vida! <br><br>";
            }
            else {
                echo "Não se encontrou vida! <br><br>";
            }
        }
    ?>


</body>
</html>
