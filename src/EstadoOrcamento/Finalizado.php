<?php
namespace App\DessignPattern\EstadoOrcamento;

use App\DessignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function aplicaDescontoExtra(Orcamento $orcamento):float
    {
        throw new \DomainException('Um orçamento finalizado não pode recebe desconto extra');
    }
}
