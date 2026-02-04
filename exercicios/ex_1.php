<?php

$itens= [
    'porta' => 100,
    'maçaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function retornaItensCaros($arr){

    $arrItensCaros = [];

    foreach($arr as $item => $preco){
        if($preco > 10){
            array_push($arrItensCaros, $item);
        }
    }

    return $arrItensCaros;
}

$novoArr = retornaItensCaros($itens);

print_r($novoArr);