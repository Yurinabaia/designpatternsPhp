<?php
namespace App\DessignPattern\Descontos;

use App\DessignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function desconto(Orcamento $orcamento): float;


}
