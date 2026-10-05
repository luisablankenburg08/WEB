<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <body>
        <h2>Operações</h2>
        <p>1. Adição</p>
        <p>2. Subtração</p>
        <p>3. Multiplicação</p>
        <p>4. Divisão</p>

    <form action="" method="POST">
        <label for="escolha">Escolha:</label>
        <select name="escolha" id="escolha" required>
            <option value="" disabled selected hidden>Selecione uma opção...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <br><br>

        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">Calcular</button>
    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['escolha'])) {

        $escolha = $_POST['escolha'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

            switch ($escolha) {
                case 1:
                    $resultado = $num1 + $num2;
                    echo "<br>A soma é: $resultado";
                    break;
                case 2:
                    $resultado = $num1 - $num2;
                    echo "<br>A subtração é: $resultado";
                    break;
                case 3:
                    $resultado = $num1 * $num2;
                    echo "<br>A multiplicação é: $resultado";
                    break;
                case 4:
                    $resultado = intdiv($num1, $num2);
                    echo "<br>A divisão é: $resultado";
                    break;
            }
        };
    
    ?>

</body>
</html>
