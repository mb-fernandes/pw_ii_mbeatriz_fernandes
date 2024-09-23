<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar número no Array</title>
</head>
<body>
    <form method="post" action="">
        <label for="array">Coloque números separados por vírgula:</label>
        <input type="text" name="array" id="array" placeholder="Ex: 1,2,3,4,5" required><br><br>
        <label for="acharnumero">Digite o numero que quer encontrar: </label>
        <input type="number" name="acharnumero" id="acharnumero" required><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['array'];
            $array = array_map('intval', explode(',', $input));

            $acharNumero = $_POST['acharnumero'];

            function contemNumeroNoArray($array, $numero) {
                return in_array($numero, $array) ? "true" : "false"; 
            }

            $resultado = contemNumeroNoArray($array, $acharNumero);
            echo "O array contém o número: $resultado";
        }
    ?>
</body>
</html>