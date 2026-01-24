<?php

    class Pessoa{
        
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $jonathan = new Pessoa();
    $jonathan->nome = 'Jonathan';
    
    //echo $jonathan->nome;
    echo $jonathan->falar();

    