<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>

    <form action="" method="POST">
        <label for="dia">Dia:</label>
        <input type="number" name="dia" id="dia" max="7" min="1">
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['dia'])) {

        $dia = $_POST['dia'];

            switch ($dia) {
                case 1:
                    echo "Segunda-feira";
                    break;
                case 2:
                    echo "Terça-feira";
                    break;
                case 3:
                    echo "Quarta-feira";
                    break;
                case 4:
                    echo "Quinta-feira";
                    break;
                case 5:
                    echo "Sexta-feira";
                    break;
                case 6:
                    echo "Sábado";
                    break;
                case 7:
                    echo "Domingo";
                    break;
            }
        };
    
    ?>

</body>
</html>
