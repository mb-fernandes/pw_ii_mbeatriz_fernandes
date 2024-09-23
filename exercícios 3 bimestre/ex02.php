<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triângulo</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="base" id="base" placeholder="Base do Triângulo" required>
        <input type="number" name="altura" id="altura" placeholder="Altura do Triângulo" required>
        <button type="submit">Calcular Área</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            function areaDoTriangulo($a, $b) {
                return ($a * $b) / 2;
            }

            $resultado = areaDoTriangulo($base, $altura);
            echo "<p>Resultado da soma: $resultado</p>";
        }
    ?>
</body>
</html>
