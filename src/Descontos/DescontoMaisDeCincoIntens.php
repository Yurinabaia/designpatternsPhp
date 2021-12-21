<?php
namespace App\DessignPattern\Descontos;

use App\DessignPattern\Orcamento;

class DescontoMaisDeCincoIntens extends Desconto
{
    public function desconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeImposto > 5) {
            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }
}
