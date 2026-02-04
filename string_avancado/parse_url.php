<?php

// parse_url retorna um array com as partes de uma url decompostas;

$url = "https://www.google.com";
$url2 =  "http://www.horadecodar.com.br/?busca=php";
$decomposta_url = parse_url($url);
$decomposta_url2 = parse_url($url2);

print_r($decomposta_url);
print_r($decomposta_url2);
