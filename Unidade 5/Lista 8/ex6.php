<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 

        for($i = 100; $i >=0; $i = $i -20) {
            echo "Bateria: $i% <br>";
            if ($i == 0) {
                echo "A bateria acabou. <br>";
            }
        }
    ?>

</body>
</html>
