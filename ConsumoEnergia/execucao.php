<?php

require_once('modelo/Comercial.php');
require_once('modelo/Industrial.php');
require_once('modelo/Residencial.php');

$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Residencial\n";
    echo "2- Comercial\n";
    echo "3- Industrial\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa finalizado!";
            break;
        case 1:
            echo "\nConsumo Residencial: \n";
            $residencial = new Residencial();
            $residencial->setConsumoResidencial(readline("Quanto foi o consumo em KWh?: "));
            echo "A fatura foi de R$: " . $residencial->getValorFatura() . "\n";
            break;
        case 2:
            echo "\nConsumo Comercial: \n";
            $comercial = new Comercial();
            $comercial->setConsumoComercial(readline("Quanto foi o consumo em KWh?: "));
            echo "A fatura foi de R$: " . $comercial->getValorFatura() . "\n";
            break;
        case 3:
            echo "\nConsumo Industrial: \n";
            $industrial = new Industrial();
            $industrial->setConsumoIndustrial(readline("Quanto foi o consumo em KWh?: "));
            echo "A fatura foi de R$: " . $industrial->getValorFatura() . "\n";
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);

