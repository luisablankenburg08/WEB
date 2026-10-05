<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Digite o CEP (somente números):</label>
        <input type="number" id="num1" name="num1" minlenght="8" maxlength="8"required>
        <button type="submit">Verificar</button>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['num1'])) {

            $cep = $_POST['num1'];
            $lista = [88495000 => 5.00, 88490000 => 20.00, 88780000 => 15.00, 88790000 => 30.00];
            foreach ($lista as $item => $frete) {
                if ($cep == $item ) {
                    echo "CEP: $cep <br>Frete: R$$frete";
                }

            }
        }
        
    ?>
</body>
</html>