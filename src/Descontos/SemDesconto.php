<?php
namespace App\DessignPattern\Descontos;

use App\DessignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    
    public function desconto(Orcamento $orcamento): float
    {
        return 0;
    }
}

