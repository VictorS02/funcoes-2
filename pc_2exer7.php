<?php

    function valorPagamento($prestacao,$dias) {
        $multa = $dias * 0.001;
        $multaTotal = $prestacao * $multa;    
        $jurosAtraso = $prestacao * 0.03;
                $valorApagar = $prestacao + $jurosAtraso + $multaTotal;
        return $valorApagar;
    }

        /* Esse exercício não pode ser resolvido devido ao mesmo problema do exercício anterior */

        print "Digite o valor da prestação: ";
        $prestacao = (float) fgets(STDIN);

        print "Digite a quantidades de dias em atraso: ";
        $dias = (float) fgets(STDIN);

        $valorApagar = valorPagamento($prestacao,$dias);

        print "O valor total a pagar é ".$valorApagar."\n";

?>