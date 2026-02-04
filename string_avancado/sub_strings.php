<?php

// substr(str, offset, length) -> cria uma sub string com um corte no 
// indice inicial (offset) e 
// comprimento da palavra (length) colocados na variável em forma de índices

$str = "Uma string muito louca";

$stringParcial = substr($str, 4, 6);

echo $stringParcial;