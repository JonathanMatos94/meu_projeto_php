<?php

// strpos($str, "string a ser encontrada") encontra uma string específica dentro da string passada;
// ele retorna o índice onde a string começa ou retorna false;


$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo "$testeEncontrar";