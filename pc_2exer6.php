<?php
    function convertTimeFormat($hour, $minute) {
        if ($hour >= 13 && $hour <= 23) {
            $formattedHour = $hour - 12;
            $userMessage = "\n\n A hora digitada " . $hour . ":" . $minute . " é igual a " . $formattedHour . ":" . $minute . " P.M. \n\n";
        } elseif ($hour == 00 || $hour == 0) {
            $formattedHour = $hour + 12;
            $userMessage = "\n\n A hora digitada " . $hour . ":" . $minute . " é igual a " . $formattedHour . ":" . $minute . " P.M. \n\n";
        } elseif ($hour == 12) {
            $userMessage = "\n\n A hora digitada " . $hour . ":" . $minute . " é igual a " . $hour . ":" . $minute . " A.M. \n\n";
        } else {
            $userMessage = "\n\n A hora digitada " . $hour . ":" . $minute . " é igual a " . $hour . ":" . $minute . " A.M. \n\n";
        }
            return $userMessage;
    }
    /* Tem um erro no codigo abaixo, pois o do-while não aceita duas perguntas ou mais excluindo-as de serem respondidas  */
        do {
            print "\n Insira apenas a hora, no formato de 24 horas (por exemplo, caso seja 22:22, insira aqui apenas o '22') : ";
            $hour = (int) fgets(STDIN);

            print "\n Insira apenas os minutos, no formato de 24 horas (por exemplo, caso seja 22:22, insira aqui apenas o '22') : ";
            $minute = (int) fgets(STDIN);

            $userMessage = convertTimeFormat($hour, $minute);
                echo $userMessage;

                    print "\n Deseja converter o formato de horário novamente? [S/N] ";
                        $userAnswer = (string) fgetc(STDIN);

        } while ($userAnswer == "S" || $userAnswer == "s");

            print "\n\n Obrigado, até a próxima! \n\n";
?>