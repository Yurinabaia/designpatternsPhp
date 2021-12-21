<?php
namespace App\DessignPattern\Impostos;
use App\DessignPattern\Orcamento;

class ICMS implements Imposto
{
    public function imposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}

