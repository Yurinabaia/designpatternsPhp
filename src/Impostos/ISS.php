<?php
namespace App\DessignPattern\Impostos;
use App\DessignPattern\Orcamento;

class ISS implements Imposto
{
    public function imposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}

