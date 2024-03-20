<?php
    $peso = 50;
    $altura = 1.65;

    $imc = ($peso)/($altura*$altura);

    echo "Sua altura é ", $altura, " e seu peso é ", $peso;
    echo "<br>", "seu imc é ", $imc, "<br>";

    if ($imc < 18.50){
        $classificacao = "Magreza";
    } elseif ($imc > 18.49){
        $classificacao = "Normal";
    } elseif ($imc > 24.99){
        $classificacao = "Sobrepeso";
    } elseif ($imc > 29.99){
        $classificacao = "Obesidade";
    }

    echo "classificação: ", $classificacao;
?>