<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Ausente</title>
</head>
<body>
<form method="post" action="">
        <label for="array">Coloque números separados por vírgula:</label>
        <input type="text" name="array" id="array" placeholder="Ex: 1,2,3,4,5" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['array'];
            $array = array_map('intval', explode(',', $input));
        
            $min = min($array);
            $max = max($array);
            
            function acharNumerosAusentes($array, $min, $max) {
                $todosNumeros = range($min, $max);
                $numerosAusentes = array_diff($todosNumeros, $array);
                return $numerosAusentes;
            }
        
            $numerosAusentes = acharNumerosAusentes($array, $min, $max);
            
            if (empty($numerosAusentes)) {
                echo "Todos os números de $min a $max estão presentes.";
            } else {
                echo "Os números ausentes são: " . implode(', ', $numerosAusentes);
            }
        }
    ?>
</body>
</html>