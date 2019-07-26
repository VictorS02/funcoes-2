<?php
    function textReverse($userString) {
        $textReverse = strrev($userString);
            return $textReverse;
    }
    print "\n Digite um número ou um texto qualquer, que deseja inverter: ";
        $userString = (string) trim(fgets(STDIN));
        print "\n\n" . textReverse($userString) . "\n\n";
?>