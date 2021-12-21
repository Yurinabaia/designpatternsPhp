<?php
namespace App\DessignPattern\Impostos;

use App\DessignPattern\Orcamento;

class Icpp extends ImpostoComDuasAliquotas
{
   
    
    protected function deveAplicarTaxaMaximo(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calcularTaxarMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.07;
    }

    protected function calcularTaxarMaximo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }
}

