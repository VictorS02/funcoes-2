<?php

    function somaImposto($taxaImposto,$custo) {
        $taxaImposto = $taxaImposto/100;
        $valorImposto = $custo * $taxaImposto;
        $valorImposto = $valorImposto + $custo;

        return $valorImposto;
    }

    print "\nDigite o valor do produto: ";
        $custo = (float) fgets(STDIN);

    print "Digite o imposto sobre o produto (Em porcentagem): ";
        $taxaImposto = (float) fgets(STDIN);

    $valorImposto = somaImposto($taxaImposto,$custo);

    print "O valor do produto após o imposto é ".$valorImposto."reais \n\n";

?>