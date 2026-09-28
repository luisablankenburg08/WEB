<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <label for="peso">Peso:</label>
        <input type="number" name="peso" id="peso" required>
        <br><br>

        <label for="altura">Altura:</label>
        <input type="number" step="0.01" min="0" max="100" inputmode="decimal" id="altura" name="altura" required>

        <br>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) {

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);

        switch (true) {
            case ($imc <18.5):
                echo "Abaixo do peso.";
                break;
            case ($imc >= 18.5 && $imc <=24.9):
                echo  "Peso normal";
                break;
            case ($imc >=25 && $imc <=29.9):
                echo  "Sobrepeso";
                break;
            case ($imc >= 30):
                echo  "Obesidade";
                break;
        }
        };
    
    ?>

</body>
</html>
