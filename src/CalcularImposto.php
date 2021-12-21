<?php

namespace App\DessignPattern;

use App\DessignPattern\Impostos\Imposto;

class CalcularImposto 
{
    public function calcula(Orcamento $orcamento, Imposto  $imposto):float
    {
       return  $imposto->imposto($orcamento);
    }
}
