<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoje é Natal?</title>
</head>
<body>
    <form method="post" action="">
        <label for="data">Coloque uma data:</label>
        <input type="date" name="data" id="data" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['data'];
            
            $dataEscolhida = date('m-d', strtotime($input));

            function eNatal($data) {
                return $data === '12-25'; 
            }

            $resultado = eNatal($dataEscolhida);
            if ($resultado) {
                echo "A data escolhida é Natal!";
            } else {
                echo "A data escolhida não é Natal.";
            }
        }
    ?>
</body>
</html>