<?php
    function sequentialRepetition($limitNumber) {
        for ($counter = 1; $counter <= $limitNumber; $counter++) {
            for ($subCounter = 1; $subCounter <= $counter; $subCounter++) { 
                print $subCounter . " ";
            }
            $subCounter = 1;
            print "\n";
        }
    }
        print "\n Insira o número (inteiro) limite para a contagem regressiva e sequencial:";
        $limitNumber = (int) fgets(STDIN);
        
            print "\n";
                sequentialRepetition($limitNumber);
            print "\n";
?>