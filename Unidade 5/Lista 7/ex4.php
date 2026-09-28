<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>

    <form action="" method="POST">
        <label for="escolha">Clima:</label>
        <select name="escolha" id="escolha" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="nublado">Nublado</option>
            <option value="ensolarado">Ensolarado</option>
            <option value="chuvoso">Chuvoso</option>
            <option value="tempestade">Tempestade</option>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];

            switch ($escolha) {
                case "chuvoso":
                    echo "Leve um guarda-chuva.";
                    break;
                case "tempestade":
                    echo "Proteja-se. Evite sair de casa.";
                    break;
                case "ensolarado":
                    echo "Aproveite o dia.";
                    break;
                case "nublado":
                    echo "Cuidado com o mormaço.";
                    break;
            }
        };
    
    ?>

</body>
</html>
