<?php
    do {
        print "\n Deseja jogar? [S/N] "; // Se a resposta do usuário for positiva, começa o jogo, se não, parte logo pro fim com a mensagem "ok, até a próxima..."
        $userAnswer = (string) fgetc(STDIN);

        if ($userAnswer == "S" || $userAnswer == "s") {
            $number_1 = rand(1,6); // Sorteia o primeiro número no intervalo de 1 a 6
            $number_2 = rand(1,6); // Sorteia o segundo número no intervalo de 1 a 6
            $numbersSum = $number_1 + $number_2; // Soma dos dois números obtidos
            
                if ($numbersSum == 7 || $numbersSum == 11) { // Se a soma foi igual a 7 ou 11, o usuário ganhou o jogo
                    print "\n\n Parabéns, você ganhou. Sua pontuação foi de " . $numbersSum . " pontos. \n";
                } elseif ($numbersSum == 2 || $numbersSum == 3 || $numbersSum == 12) { // Se a soma foi igual a 2, 3 ou 12, o usuário perdeu o jogo
                    print "\n\n ".$numbersSum." Crap! Infelizmente você perdeu... \n";
                } else { // Se a soma dos dois números foi diferente de todos os número acima, começa agora um nova rodadado jogo, sendo os números sorteados de novo, tendo como critérios de vitória/derrota os mesmo de antes, porém agora, se for tirado 7 logo após jogar, você perde
                    print "\n Nesta rodada, sua pontuação foi de " . $numbersSum . " . Ou seja, jogando novamente... \n"; 
                    $objectiveNumber = $numbersSum;
                       
                    do {
                            $number_1 = rand(1,6); // Sorteia o primeiro número no intervalo de 1 a 6
                            $number_2 = rand(1,6); // Sorteia o segundo número no intervalo de 1 a 6
                            $numbersSum = $number_1 + $number_2; // Soma dos dois números obtidos
                                if ($numbersSum == 7) { // Se a soma foi igual a 7, o usuário perdeu o jogo
                                    exit("\n\n Infelizmente você perdeu. Sua pontuação foi de " . $numbersSum . " pontos. \n\n");
                                } elseif ($numbersSum == 2 || $numbersSum == 3 || $numbersSum == 12) { // Se a soma foi igual a 2, 3 ou 12, o usuário perdeu o jogo
                                    exit("\n\n Nesta rodada, sua pontuação foi de ".$numbersSum.". Crap! Infelizmente você perdeu... \n\n");
                                }
                                    print "\n Nesta rodada, sua pontuação foi de " . $numbersSum . " . Ou seja, jogando novamente... \n";
                        } while ($numbersSum != $objectiveNumber);
                            print "\n Nesta rodada, sua pontuação foi de " . $numbersSum . " . Ou seja, jogo finalizado, ganhou \n\n";
                }
        } else {
            exit("\n  Ok, até a próxima... \n\n");
        }
    } while ($userAnswer == "S" || $userAnswer == "s");
?>