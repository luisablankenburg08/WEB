<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>

    <form action="" method="POST">
        <label for="escolha">Idade:</label>
        <input type="number" name="escolha" id="escolha" min="0" max="100">

        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];

            switch (true) {
                case ($escolha < 13):
                    echo "Criança";
                    break;
                case ($escolha >=13 && $escolha <=17):
                    echo "Adolescentes";
                    break;
                case ($escolha >=18 && $escolha <=64):
                    echo "Adulto";
                    break;
                default:
                    echo "Idoso";
                    break;
            }
        };
    
    ?>

</body>
</html>
