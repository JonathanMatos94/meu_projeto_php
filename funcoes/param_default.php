<?php

function teste($a = "teste"){
    echo "O valor de A é: $a";
}

teste();
teste(41);

function teste2($a = 10, $b){
    echo "O valor de $b x $a é:". "" .$b*$a;
}
teste2(10,20);