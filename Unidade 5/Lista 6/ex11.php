<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <form action="" method="POST">
        <label for="dia">Dia:</label>
        <input type="number" id="dia" name="dia" min="1" max="31">

        <label for="mes">Mês:</label>
        <input type="number" id="mes" name="mes" min="1" max="12">
        <button type="submit">Enviar</button>
    </form>


    <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];

            $signo = '';

            if ($mes == 1) {
                if ($dia <20) {
                    $signo = 'Capricórnio';
                }
                else {
                    $signo = 'Aquário';
                };
            }
            elseif ($mes == 2) {
                if ($dia < 19) {
                    $signo = 'Aquário';
                }
                else {
                    $signo = 'Peixes';
                };
            }
            elseif ($mes == 3 ) {
                if ($dia < 21) {
                    $signo = 'Peixes';
                }
                else {
                    $signo = 'Áries';
                };
            }
            elseif ($mes ==4) {
                if ($dia < 20) {
                    $signo = 'Áries';
                }
                else {
                    $signo = 'Touro';
                };
            }
            elseif ($mes ==5) {
                if ($dia < 21) {
                    $signo = 'Touro';
                }
                else {
                    $signo = 'Gêmeos';
                };
            }
            elseif ($mes ==6) {
                if ($dia < 21) {
                    $signo = 'Gêmeos';  
                }
                else {
                    $signo = 'Câncer';
                };
            }
            elseif ($mes ==7) {
                if ($dia <23) {
                    $signo = 'Câncer';
                }
                else {
                    $signo = 'Leão';                
                };
            }
            elseif ($mes == 8) {
                if ($dia <23) {
                    $signo = 'Leão';
                }
                else {
                    $signo = 'Virgem';                
                };
            }
            elseif ($mes == 9) {
                if ($dia < 23) {
                    $signo = 'Virgem';       
                }
                else {
                    $signo = 'Libra';   
                };
            }
            elseif ($mes == 10) {
                if ($dia < 23) {
                    $signo = 'Libra';       
                }
                else {
                    $signo = 'Escorpião';   
                };
            }
            elseif ($mes == 11) {
                if ($dia < 22) {
                    $signo = 'Escorpião';       
                }
                else {
                    $signo = 'Sagitário';   
                };
            }
            elseif ($mes == 12) {
            if ($dia < 22) {
                    $signo = 'Sagitário';       
                }
                else {
                    $signo = 'Capricórnio';   
                };
            }
            else {
                echo 'Data inválida';
            };

        echo "Seu signo é $signo.";

    }

    ?>


</body>
</html>
