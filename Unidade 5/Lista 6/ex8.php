<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="ex8.php" method="POST">
        <label for="valor">Usuário:</label>
        <input type="text" id="usuario" name="usuario">

        <label for="valor">Senha:</label>
        <input type="number" id="senha" name="senha">
        <button type="submit">Enviar</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario == "admin" && $senha==12345){
            echo 'Login bem-sucedido!';
        }
        else {
            echo "Nome de usuário ou senha incorretos";
        }
        }
    ?>

</body>
</html>
