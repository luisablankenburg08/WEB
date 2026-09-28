<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="ex7.php" method="POST">
        <label for="valor">Idade:</label>
        <input type="number" id="idade" name="idade">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $idade = $_POST['idade'];

        if ($idade <10) {
            echo "Filmes com classificação 'Livre para todos os públicos'.";
        }
        elseif ($idade >=10 && $idade <=13){
            echo "Filmes com classificação de até '12 anos'.";
        }
        elseif ($idade >=14 && $idade <=17) {
            echo "Filmes com classificação de até '16 anos'.";
        }
        else {
            echo "Filmes com classificação '18 anos' (adulto).";
        }
    }
    ?>

</body>
</html>
