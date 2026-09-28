<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>
        <h2>Menu</h2>
        <p>1. Rock</p>
        <p>2. Pop</p>
        <p>3. Sertanejo</p>
        <p>4. Eletrônica</p>

    <form action="" method="POST">
        <label for="escolha">Escolha:</label>
        <select name="escolha" id="escolha" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];

            switch ($escolha) {
                case 1:
                    echo "Você escolheu Rock. Tocando 'Sweet Child O' Mine'...";
                    break;
                case 2:
                    echo "Você escolheu Pop. Tocando 'Blinding Lights'...";
                    break;
                case 3:
                    echo "Você escolheu Sertanejo. Tocando 'Borboletas'...";
                    break;
                case 4:
                    echo "Você escolheu Eletrônica. Tocando 'Hear Me Now'...";
                    break;
            }
        };
    
    ?>

</body>
</html>
