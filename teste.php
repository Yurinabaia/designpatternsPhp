<?php
namespace App\DessignPattern;
use App\DessignPattern\Orcamento;
use App\DessignPattern\CalcularImposto;
use App\DessignPattern\Impostos\ICMS;
use App\DessignPattern\Impostos\ISS;

require 'vendor/autoload.php';

/*
$calculadora = new CalcularImposto();

$orcamento = new Orcamento();

$orcamento->valor = 1000;
echo $calculadora->calcula($orcamento, new ISS());//Padrão strategy funciona como um objeto
//existe mais de um imposto, então precisamos de um objeto para cada imposto
//Quando temos bastante if e else, então o padrão strategy é muito útil
*/

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeImposto = 5;

echo $calculadora->calculadoraDescontos($orcamento);
//O padrão chain of responsibility é muito útil quando temos uma cadeia de itens a serem implementados
//Neste caso imagina uma empresa de telemarketing que a cada ligação temos um atendente 
//responsavel para o cliente, se ele não for responsavel pelo problema do cliente passar para proximo
//atendente;




