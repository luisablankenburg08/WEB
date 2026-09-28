<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pedra, Papel e Tesoura</title>
</head>
<body>
    <form action="" method="POST">
        <label for="escolha1">Jogador 1:</label>
        <select name="escolha1" id="escolha1" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select>

        <label for="escolha2">Jogador 2:</label>
        <select name="escolha2" id="escolha2" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select>

        <button type="submit">Enviar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['escolha1']) && isset($_POST['escolha2'])) {
        $escolha1 = $_POST['escolha1'];
        $escolha2 = $_POST['escolha2'];


        if ($escolha1 === $escolha2) {
            echo "Empate.";
        } elseif (
            ($escolha1 === "pedra" && $escolha2 === "tesoura") ||
            ($escolha1 === "papel" && $escolha2 === "pedra") ||
            ($escolha1 === "tesoura" && $escolha2 === "papel")
        ) {
            echo "Resultado: Jogador 1 venceu!";
        } else {
            echo "Resultado: Jogador 2 venceu!";
        }
    }
    ?>
</body>
</html>
