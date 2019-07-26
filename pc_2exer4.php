<?php

    function VERvsNEG ($arg1) {
        if ($arg1 <= 0) {
            $valor = "N";
        }else {
            $valor = "P";
        }
        return $valor;
    }

    print "Digite o primeiro argumento: ";
        $arg1 = (float) fgets(STDIN);

    $valor = VERvsNEG($arg1);
    print "O valor apresentado é ".$valor."; (P = Positivo, N = Negativo)\n";

?>