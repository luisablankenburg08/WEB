<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dolar = 5.90;
        $real = 5.90 * 5.11;
        $valor_real = number_format($real, 2, ',', '.');
        echo "O produto custa R$ $valor_real.";
    ?>
    
</body>
</html>