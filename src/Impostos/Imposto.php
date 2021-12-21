<?php

namespace App\DessignPattern\Impostos;

use App\DessignPattern\Orcamento;

interface Imposto
{
    public function imposto(Orcamento $orcamento): float;
}
