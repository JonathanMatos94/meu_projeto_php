<?php

$a = 10;

while($a > 0){

    if($a == 5 || $a == 7){
        echo "pulou a execução $a <br>";
        $a --;

        continue;
    }

    echo "Executando o Loop $a <br>";
    $a--;
}

$arr = [10,20,30,40,50,60,70,80,90,100];
$index = 0;
while($index < count($arr)){

    

    if(($arr[$index] == 30) || ($arr[$index] == 40)){

        $index++;
        continue;
    }

    echo "$arr[$index] //" ;
    $index++;
}