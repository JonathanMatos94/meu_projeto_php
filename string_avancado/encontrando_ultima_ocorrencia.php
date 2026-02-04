<?php

// strrpos() encontra a última ocorrencia de um texto na string;

$str = "O teste do método strrpos foi o teste de maior sucesso, depois faremos mais um teste";

$econtraUltimaOcorrencia = strrpos($str, "teste");

echo $econtraUltimaOcorrencia;