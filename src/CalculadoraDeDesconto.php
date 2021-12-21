<?php
namespace App\DessignPattern;

use App\DessignPattern\Descontos\DescontoMaisDeCincoIntens;
use App\DessignPattern\Descontos\DescontoMaisDeQuinhetosReais;
use App\DessignPattern\Descontos\SemDesconto;

class CalculadoraDeDesconto
{
    public function calculadoraDescontos(Orcamento $orcamento):float
    {
        $cadeiaDeDesconto = new DescontoMaisDeCincoIntens(
            new DescontoMaisDeQuinhetosReais(new SemDesconto() ));
        return $cadeiaDeDesconto->desconto($orcamento);
    }

}
