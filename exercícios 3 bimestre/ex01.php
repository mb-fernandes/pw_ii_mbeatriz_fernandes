<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="num1" id="num1" placeholder="Número 1" required>
        <input type="number" name="num2" id="num2" placeholder="Número 2" required>
        <button type="submit">Somar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
            $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;

            function soma($a, $b) {
                return $a + $b;
            }

            $resultado = soma($num1, $num2);
            echo "<p>Resultado da soma: $resultado</p>";
        }
    ?>
</body>
</html>
