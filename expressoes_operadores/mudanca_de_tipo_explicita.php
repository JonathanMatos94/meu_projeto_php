<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)){
        echo "É um float.<br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)){
        echo "É string <br>";
    }

    $nome = "Jonathan";
    $sobrenome = "Matos";

    $nomeCompleto = $nome . " " . $sobrenome; //espaco ponto espaco é um simbolo de concatenacao

    echo $nomeCompleto;

    $expressao = "5"*12;

    echo gettype($expressao);