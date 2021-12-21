<?php
namespace App\DessignPattern\Descontos;

use App\DessignPattern\Orcamento;

class DescontoMaisDeQuinhetosReais extends Desconto
{
    public function desconto(Orcamento $orcamento): float
    {
        if($orcamento->valor > 500) {
            return $orcamento->valor * 0.07;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }
}