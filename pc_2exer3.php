<?php

    function soma ($arg1,$arg2,$arg3) {
        $soma = $arg1 + $arg2 + $arg3;
        return $soma;
    }


    print "Digite o primeiro argumento: ";
        $arg1 = (float) fgets(STDIN);

    print "Digite o segundo argumento: ";
        $arg2 = (float) fgets(STDIN);

    print "Digite o terceiro argumento: ";
        $arg3 = (float) fgets(STDIN);

    $soma = soma($arg1,$arg2,$arg3);

    print "A soma dos argumentos digitados é igual à ".$soma."\n";

?>