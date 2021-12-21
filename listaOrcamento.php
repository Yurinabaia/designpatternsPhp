<?php

use App\DessignPattern\ListaOrcamento;
use App\DessignPattern\Orcamento;

require_once 'vendor/autoload.php';

$listaOrcamento = new ListaOrcamento();

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 10;
$orcamento1->aprovar();
$orcamento1->valor = 100;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 2;
$orcamento2->aprovar();
$orcamento2->valor = 100;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 2;
$orcamento3->aprovar();
$orcamento3->valor = 150;



$listaOrcamento->addOrcamento($orcamento1);
$listaOrcamento->addOrcamento($orcamento2);
$listaOrcamento->addOrcamento($orcamento3);


foreach ($listaOrcamento as $orcamento) {
    echo "Orçamento: " . $orcamento->valor . PHP_EOL;
    echo "Quantidade de itens: " . $orcamento->quantidadeItens . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo PHP_EOL;
}

//O php precisar de algo pecorrivel para poder executar o foreach.
//Neste caso usamos o iterator como um array.
//A lista de object é um iterator.
//Sem a necessidade de buscar os dados do array, como um get.

