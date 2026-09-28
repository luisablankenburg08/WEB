<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>

    <form action="" method="POST">
        <label for="escolha">Emoção:</label>
        <select name="escolha" id="escolha" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="triste">Triste</option>
            <option value="feliz">Feliz</option>
            <option value="nervoso">Nervoso</option>
            <option value="cansado">Cansado</option>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];

            switch ($escolha) {
                case "triste":
                    echo "Tente ouvir uma música que você gosta ou conversar com um amigo.";
                    break;
                case "feliz":
                    echo "Aproveite o dia e divirta-se.";
                    break;
                case "nervoso":
                    echo "Procure relaxar e fazer uma meditação.";
                    break;
                case "cansado":
                    echo "Tome um café e não vá dormir tarde.";
                    break;
            }
        };
    
    ?>

</body>
</html>
