<?php

//Duas formas para verificar os dados, print_r e var_dump;
//O var_dump exibe de uma forma humar readable;

$arr = [
    "Teste",
    123,
    1234.231231,
    true,
    [1,2,3]
];

print_r($arr);

var_dump($arr);