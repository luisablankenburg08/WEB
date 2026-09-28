<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>

    <form action="" method="POST">
        <label for="escolha">Escolha um gênero:</label>
        <select name="escolha" id="escolha" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="sertanejo">Seranejo</option>
            <option value="eletronica">Eletrônica</option>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];

            switch ($escolha) {
                case "rock":
                    echo "Artista recomendado: Queen.";
                    break;
                case "pop":
                    echo "Artista recomendado: Adele.";
                    break;
                case "sertanejo":
                    echo "Artista recomendado: Zezé Di Cmargo & Luciano.";
                    break;
                case "eletronica":
                    echo "Artista recomendado: Alok.";
                    break;
            }
        };
    
    ?>

</body>
</html>
