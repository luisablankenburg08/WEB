<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <form action="" method="POST">
        <label for="temp">Temperatura:</label>
        <input type="number" id="temp" name="temp">

        <button type="submit">Enviar</button>
    </form>

    <?php 
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp = $_POST['temp'];
             if ($temp < 10) {
                echo 'Está muito frio! Use roupas quentes.';
             }
             elseif ($temp >=10 && $temp <=20) {
                echo 'Frio. Vista-se bem!';
             }
             elseif ($temp >=21 && $temp <=25) {
                echo 'Temperatura agradável.';
             }
             elseif ($temp >=26 && $temp <=20) {
                echo "Está ficando quente!";
             }
             else {
                echo 'Está muito quente! Fique hidratado.';
             }
         };
    ?>

</body>
</html>
