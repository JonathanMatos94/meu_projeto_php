<?php

$str = "O rato roeu a roupa do rei de Roma";



function contaCharA($str){

    $count = 0;

    for($i = 0; $i < strlen($str); $i++){

        if($str[$i] === 'a'){
        $count++;
        }
    }
    return $count;
}

echo contaCharA($str);

