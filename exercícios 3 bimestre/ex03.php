<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Último Item do Array</title>
</head>
<body>
    <form method="post" action="">
        <label for="array">Digite números separados por vírgula:</label>
        <input type="text" name="array" id="array" placeholder="Ex: 1,2,3,4,5" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['array'];

            $array = array_map('intval', explode(',', $input));

            function ultimoItemDoArray($array) {
                if (empty($array)) {
                    return null; 
                }
                return end($array); 
            }

            $resultado = ultimoItemDoArray($array);
            echo "<p>Último item do array: $resultado</p>";
        }
    ?>
</body>
</html>