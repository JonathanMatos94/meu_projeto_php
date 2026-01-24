<?php

// quando uma variável referencia a outra, as duas apontam pro mesmo lugar na memória
// ou seja, quando a variável referencia é modificada, a variavel referenciada também é

$x = 5;

echo $x;

$y =& $x;

$y = 6;

echo $x;
echo $y;