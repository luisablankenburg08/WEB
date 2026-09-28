<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <label for="hora">Horário:</label>
        <input type="number" name="hora" id="hora" min="0" max="23" required>
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['hora'])) {

        $hora = $_POST['hora'];

        switch (true) {
            case ($hora >=5 && $hora <=11):
                echo "Manhã.";
                break;
            case ($hora >= 12 && $hora <=17):
                echo  "Tarde";
                break;
            case ($hora >=18 && $hora <=21):
                echo  "Noite";
                break;
            case ($hora >= 22):
                echo  "Madrugada";
                break;
        }
        };
    
    ?>

</body>
</html>
