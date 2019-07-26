<?php
    function shuffleText($text) {
        $shuffleText = str_shuffle($text);
            return $shuffleText;
    }
        print "\n\n Digite a seguir o texto que quer embaralhar: ";
            $text = (string) trim(fgets(STDIN));
                print "\n\n " . shuffleText($text) . " \n\n\n";
?>