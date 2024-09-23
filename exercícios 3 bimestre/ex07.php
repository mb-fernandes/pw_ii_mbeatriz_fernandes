<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Número</title>
</head>
<body>
    <form method="post" action="">
        <label for="array">Coloque os números separados por vírgula:</label>
        <input type="text" name="array" id="array" placeholder="Ex: 2, 3, 5, ..." required> &nbsp
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['array'];

            $array = array_map('intval', explode(',', $input));

            function menorNumero($array) {
                //poderia usar min($array), mas é isso
                $menorNumero = $array[0];

                foreach ($array as $numero) {
                    if ($numero < $menorNumero) {
                        $menorNumero = $numero;
                    }
                }

                return $menorNumero;
            }

            $resultado = menorNumero($array);
            echo "Menor número: $resultado";
        }
    ?>
</body>
</html>