<?php
namespace App\DessignPattern\Impostos;

use App\DessignPattern\Orcamento;

class Ikcv implements ImpostoComDuasAliquotas
{
    public function deveAplicarTaxaMaximo(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }
    public function calcularTaxarMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.07;
    }
    public function calcularTaxarMaximo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }
}

