<?php
    function textQuantifier($userString) {
        $textQuantifier = strlen($userString);
            return $textQuantifier;
    }
    print "\n Digite um número ou um texto qualquer, para encontrar a quantidade de caracteres contidos nele ";
        $userString = (string) trim(fgets(STDIN));

        print "\n\n No número ou texto inserido há um total de " . textQuantifier($userString) . " caracteres. \n\n";
?>