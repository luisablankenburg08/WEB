<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>

    <form action="" method="POST">
        <label for="escolha">Nota:</label>
        <input type="number" name="escolha" id="escolha" min="0" max="10">

        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];

            switch ($escolha) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "Reprovado.";
                    break;
                case 6:
                case 7:
                    echo "Bom, mas pode melhorar.";
                    break;
                case 8:
                case 9:
                    echo "Muito bom!";
                    break;
                case 10:
                    echo "Excelente!";
                    break;
            }
        };
    
    ?>

</body>
</html>
