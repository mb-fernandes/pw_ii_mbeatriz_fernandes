<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    
    <?php
        
        $fibo = 1;
        $nacci = 0;

        echo $nacci, " ";
        echo $fibo, " ";

        for ($i = 1; $i <= 8; $i++){
            $fibo=$fibo+$nacci;
            $nacci=$fibo-$nacci;

            echo $fibo, " ";
        }

    ?>
</body>
</html>