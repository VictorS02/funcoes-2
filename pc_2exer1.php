<?php
    function repetitiveSequence($limitNumber) {
        for ($counter = 1; $counter <= $limitNumber; $counter++) {
            for ($subCounter = 1; $subCounter <= $counter; $subCounter++) { 
                print $counter . " ";
            }
            $subCounter = 1;
            print "\n";
        }
    }
        print "\n Insira o número (inteiro) limite para a contagem progressiva e repetitiva:";
            $limitNumber = (int) fgets(STDIN);
            
            print "\n";
                repetitiveSequence($limitNumber);
            print "\n";
?>