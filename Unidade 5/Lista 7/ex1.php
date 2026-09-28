<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>
        <h2>Menu</h2>
        <p>1. Hambúrguer</p>
        <p>2. Pizza</p>
        <p>3. Sushi</p>
    <form action="" method="POST">
        <label for="poder">Escolha:</label>
        <select name="poder" id="poder" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['poder'])) {

        $escolha = $_POST['poder'];

            switch ($escolha) {
                case 1:
                    echo "Hambúrguer";
                    break;
                case 2:
                    echo "Pizza";
                    break;
                case 3:
                    echo "Sushi";
                    break;
                default:
                    echo "Opção inválida";
                    break;
            }
        };
    
    ?>

</body>
</html>
