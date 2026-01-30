<?php

/* 
    Mesma função do include/require 
    porém impede que o mesmo arquivo seja adicionado mais de uma vez */

    include_once "teste_diretorio.php";
    include_once "teste.php";
    include_once "teste.php";
?>
    <p>Testando Código</p>