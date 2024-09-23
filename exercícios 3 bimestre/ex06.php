<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Número</title>
</head>
<body>
    <form method="post" action="">
        <p>Digite dois números</p>
        <label for="num1">1º Número:</label>
        <input type="number" name="num1" id="num1" required><br>
        <label for="num2">2º Número:</label>
        <input type="number" name="num2" id="num2" required><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = intval($_POST['num1']);
             
            $num2 = intval($_POST['num2']);

            function menorNumero($a, $b) {
                return $a < $b ? $a : $b;
            }

            $resultado = menorNumero($num1, $num2);
            echo "Menor número: $resultado";
        }
    ?>
</body>
</html>