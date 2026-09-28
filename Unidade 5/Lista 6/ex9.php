<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>
    <form action="" method="POST">
        <label for="poder">Superpoder:</label>
        <select name="poder" id="poder" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="força">Força</option>
            <option value="velocidade">Velocidade</option>
            <option value="voo">Voo</option>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['poder'])) {

        $poder = $_POST['poder'];

            if ($poder === 'força') {
                echo "Você seria o Hulk!";
            }
            elseif ($poder === 'velocidade') {
                echo "Você seria o Flash!";
            }
            elseif ($poder === 'voo') {
                echo "Você seria o Superman!";
            }   
        };
    
    ?>

</body>
</html>
