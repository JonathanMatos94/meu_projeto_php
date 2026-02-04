<?php

// strstr() funciona como o strpos() porém invés de retornar o índice, 
// retorna o resto da string após a palavra escolhida + a palvra;

$str = "Testando o resto da string, pra ver se dá certo";

$resto = strstr($str, "resto");

echo $resto;