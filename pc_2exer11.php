<?php
    function convertMonth($day, $month, $year) {
        switch ($month) {
            case '01':
                $convertedMonth = "Janeiro";               
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
            
            case '02':
                if ($day > 28) {
                    $userMessage = "\n\n Formato de data inválido... ";
                    return $userMessage;
                } else {
                $convertedMonth = "Fevereiro";                
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
                }
            break;
            case '03':
                $convertedMonth = "Março";            
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
            case '04':
                if ($day > 30) {
                    $userMessage = "\n\n Formato de data inválido... ";
                    return $userMessage;
                } else {
                $convertedMonth = "Abril";            
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
                }
            break;
            case '05':
                $convertedMonth = "Maio";          
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
            case '06':
            if ($day > 30) {
                $userMessage = "\n\n Formato de data inválido... ";
                return $userMessage;
            } else {
                $convertedMonth = "Junho";            
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            }
            break;
            case '07':
                $convertedMonth = "Julho";
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
            case '08':
                $convertedMonth = "Agosto";
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
            case '09':
            if ($day > 30) {
                $userMessage = "\n\n Formato de data inválido... ";
                return $userMessage;
            } else {
                $convertedMonth = "Setembro";
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            }
            break;
            case '10':
                $convertedMonth = "Outubro";
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
            case '11':
            if ($day > 30) {
                $userMessage = "\n\n Formato de data inválido... ";
                return $userMessage;
            } else {
                $convertedMonth = "Novembro";
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            }
            break;
            case '12':
                $convertedMonth = "Dezembro";
                $userMessage = "\n\n " . $day . " de " . $convertedMonth . " de " . $year;
                    return $userMessage;
            break;
    
            default:
                exit("\n\n Formato de data inválido... \n\n");
            break;
        }
    }
        print "\n Digite a DIA - no formato numérico DD :";
            $day = (int) trim(fgets(STDIN));
            $day < 01 || $day > 31 ? exit("\n\n Formato de data inválido... \n\n") : $day = $day;
        print "\n Digite o MÊS  - no formato numérico MM: ";
            $month = (int) trim(fgets(STDIN));
            $month < 01 || $month > 12 ? exit("\n\n Formato de data inválido... \n\n") : $month = $month;
        print "\n Digite o ANO  - no formato numérico AAAA: ";
            $year = (int) trim(fgets(STDIN));
            $month < 0 ? exit("\n\n Formato de data inválido... \n\n") : $year = $year;
            $userMessage = convertMonth($day, $month, $year);
            print "\n\n O formato de " . $day . "/" . $month . "/" . $year . " equivale a " . $userMessage . " . \n\n";
?>