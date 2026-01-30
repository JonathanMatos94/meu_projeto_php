<?php

//func_get_arg = retorna uma lista com os argumentos de uma função;
//func_num_args = retorna o número de argumentos de uma função;

function soma($a, $b){

    print_r(func_get_args());
    echo func_num_args();
    return $a + $b;
}

echo soma(32,8);
