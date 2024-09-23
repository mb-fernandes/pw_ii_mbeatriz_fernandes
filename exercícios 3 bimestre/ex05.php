<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais do Fazendeiro</title>
</head>
<body>
    <form method="post" action="">
        <p>Um fazendeiro tem 3 espécies de animais em sua fazenda (galinhas, vacas e porcos) e ele quer saber quantas pernas pode ser contadas entre todos os seus animais.</p>
        <label for="array">Coloque o número de animais separados por vírgula (Ordem: galinhas, vacas, porcos):</label>
        <input type="text" name="array" id="array" placeholder="Ex: 2, 3, 5" required> &nbsp
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['array'];
            $array = array_map('intval', explode(',', $input));

            function numeroDePernasAnimais($array) {
                $quantidade_pernas_galinhas = $array[0] * 2;
                $quantidade_pernas_vacas = $array[1] * 4;
                $quantidade_pernas_porcos = $array[2] * 4; 

                $total_pernas = $quantidade_pernas_galinhas + $quantidade_pernas_vacas + $quantidade_pernas_porcos;

                return $total_pernas;
            }

            $resultado = numeroDePernasAnimais($array);
            echo "Total de pernas: $resultado";
        }
    ?>
</body>
</html>