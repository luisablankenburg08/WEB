<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Enviar</button>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['nome'])) {

        $nome = $_POST['nome'];
        echo "<br>Olá, $nome! Seja bem-vindo(a)!";
    }
    
    ?>
</body>
</html>