<?php

function alterarDados($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
}

$dados = alterarDados("Jonathan", 31);

print_r($dados);

echo "Olá $dados[0], você tem $dados[1]";