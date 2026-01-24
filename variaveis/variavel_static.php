<?php

    function teste1(){

        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste1();
    teste1();
    teste1();

    function testeStatic(){

        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();


